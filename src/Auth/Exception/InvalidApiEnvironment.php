<?php declare(strict_types=1);

namespace PMG\BingAds\Auth\Exception;

use PMG\BingAds\BingException;
use PMG\BingAds\Auth\MicrosoftProvider;

final class InvalidApiEnvironment extends \InvalidArgumentException implements BingException
{
    public function __construct(string $env, int $code=0, \Throwable $prev=null)
    {
        parent::__construct(sprintf(
            '%1$s is not a valid API environment, use %2$s::PROD or %2$s::SANDBOX',
            $env,
            MicrosoftProvider::class
        ), $code, $prev);
    }
}
