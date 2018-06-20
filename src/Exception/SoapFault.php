<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

final class SoapFault extends ApiException
{
    public static function wrap(\SoapFault $fault)
    {
        return new self(sprintf(
            '%s: %s',
            $fault->faultcode,
            $fault->getMessage()
        ), $fault->getCode(), $fault);
    }

    public function __get(string $prop)
    {
        $prev = $this->getPrevious();
        return $prev && isset($prev->$prop) ? $prev->$prop : null;
    }

    public function __isset(string $prop) : bool
    {
        $prev = $this->getPrevious();
        return $prev && isset($prev->$prop);
    }
}
