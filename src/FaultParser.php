<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\ApiException;

/**
 * Transforms `SoapFaults` into `ApiException` instances if it can.
 *
 * Bing doesn't set `xsi:type` on it's fault responses so nothing really
 * gets deserialized property.
 *
 * This class tries to address that.
 *
 * @since 0.1
 */
class FaultParser
{
    public function toException(\SoapFault $fault, array $classmap) : ?ApiException
    {
        if (empty($fault->detail)) {
            return null;
        }

        [$type, $values] = $this->extractTypeAndValue($fault->detail);
        if (!isset($classmap[$type]) || !is_subclass_of($classmap[$type], ApiException::class)) {
            return null; // not identified in our class map
        }

        $class = $classmap[$type];
        $exception = new $class(sprintf(
            '%s: %s',
            $fault->faultcode,
            $fault->getMessage()
        ), $fault->getCode(), $fault);
        $exception->setTrackingId($values->TrackingId); // every fault has one of these
        $this->setErrors($exception, $values, $classmap);

        return $exception;
    }

    private function setErrors(ApiException $exception, object $values, array $classmap) : void
    {
        foreach (get_object_vars($values) as $key => $value) {
            if ('Errors' !== substr($key, -6)) {
                continue;
            }

            $errors = $this->parseErrors($value, $classmap);
            print_r($errors);
            call_user_func([$exception, "set{$key}"], $errors);
        }
    }

    private function parseErrors($errors, array $classmap) : array
    {
        if (!is_array($errors)) {
            $errors = [$errors];
        }

        $out = [];
        foreach ($errors as $error) {
            [$type, $values] = $this->extractTypeAndValue($error);
            $cls = $classmap[$type] ?? GenericErrorObject::class;
            $errobj = new $cls();
            foreach (get_object_vars($values) as $key => $value) {
                call_user_func([$errobj, "set{$key}"], $value);
            }
            $out[] = $errobj;
        }

        return $out;
    }

    /**
     * Every object that comes back from SoapClient will look like this:
     *
     *      stdClass {
     *          public $TypeNameHere => stdClass {
     *              public $Property => 'example'
     *          }
     *      }
     *
     * `$TypeNameHere` is the name of the actual type in our class map
     * where the value of the $TypeNameHere are the values that should be filled
     * into the object from our class map.
     *
     * @return array a [$typeName, $values] pair
     */
    private function extractTypeAndValue(object $obj) : array
    {
        $vars = get_object_vars($obj);
        return [key($vars), current($vars)];
    }
}
