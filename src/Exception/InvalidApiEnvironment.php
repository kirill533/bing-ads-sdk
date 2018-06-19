<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use PMG\BingAds\BingException;

final class InvalidApiEnvironment extends \InvalidArgumentException implements BingException
{
    public function __construct(string $env, int $code=0, \Throwable $prev=null)
    {
        parent::__construct(sprintf(
            '%1$s is not a valid API environment, use %2$s::PROD or %2$s::SANDBOX',
            $env,
            Environments::class
        ), $code, $prev);
    }
}
