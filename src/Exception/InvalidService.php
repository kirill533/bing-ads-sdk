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

    public static function noXmlNamespace(string $class) : self
    {
        return new self(sprintf(
            '"%s" does not have a WSDL_NAMESPACE constant',
            $class
        ));
    }
}
