<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\InvalidApiEnvironment;

/**
 * The various API environments available for bing.
 *
 * @since 0.1
 */
final class Environments
{
    const PROD = 'prod';
    const PRODUCTION = self::PROD;
    const SANDBOX = 'sandbox';

    public static function validate(string $env) : string
    {
        $e = strtolower($env);
        if (!in_array($e, [self::PROD, self::SANDBOX], true)) {
            throw new InvalidApiEnvironemnt($env);
        }

        return $e;
    }

    // @codeCoverageIgnoreStart
    private function __construct() {}
    // @codeCoverageIgnoreEnd
}
