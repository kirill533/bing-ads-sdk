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
        if (!isset($fault->detail) || !$fault->detail) {
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
        ));

        // todo populate stuffz

        return $exception;
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
