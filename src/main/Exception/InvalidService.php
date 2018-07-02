<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use PMG\BingAds\BingException;
use PMG\BingAds\BingService;

final class InvalidService extends \RuntimeException implements BingException
{
    public static function notAService(string $class) : self
    {
        return new self(sprintf(
            '"%s" does not implement %s',
            $class,
            BingService::class
        ));
    }

    public static function missingConstants(string $class) : self
    {
        return new self(sprintf(
            '"%s" is missing required constants: WSDL_NAMESPACE, WSDL_PROD, or WSDL_SANDBOX',
            $class
        ));
    }
}
