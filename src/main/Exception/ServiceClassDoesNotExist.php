<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use PMG\BingAds\BingException;

final class ServiceClassDoesNotExist extends \RuntimeException implements BingException
{
    public static function wrap(\Throwable $prev) : self
    {
        return new self($prev->getMessage(), $prev->getCode(), $prev);
    }
}
