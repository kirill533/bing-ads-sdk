<?php declare(strict_types=1);

namespace PMG\BingAds;

/**
 * The various API environments available for bing.
 *
 * @since 0.1
 */
final class Environments
{
    const PROD = 'production';
    const PRODUCTION = self::PROD;
    const SANDBOX = 'sandbox';

    // @codeCoverageIgnoreStart
    private function __construct() {}
    // @codeCoverageIgnoreEnd
}
