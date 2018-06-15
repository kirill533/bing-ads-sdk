<?php declare(strict_types=1);

namespace PMG\BingAds\Auth;

use League\OAuth2\Client\Token\AccessToken;

/**
 * We'll use a custom access token class to accomodate for a threshold with
 * expirations.
 *
 * Basically we don't want to end up making failed requests because our token
 * expirted a second a go or something like that.
 *
 * @since 0.1
 */
final class MicrosoftAccessToken extends AccessToken
{
    const DEFAULT_THRESHOLD = 60;

    private $threshold;

    public function __construct(array $options, int $threshold=null)
    {
        parent::__construct($options);
        $this->threshold = abs($threshold ?? self::DEFAULT_THRESHOLD);
    }

    public function hasExpired() : bool
    {
        $expires = $this->getExpires();
        if (!$expires || $expires < 0) {
            return true;
        }

        return ($expires - time()) <= $this->threshold;
    }
}
