<?php declare(strict_types=1);

namespace PMG\BingAds\Auth\Exception;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use PMG\BingAds\BingException;

final class AuthenticationError extends IdentityProviderException implements BingException
{
    // noop
}
