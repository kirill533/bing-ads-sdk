<?php declare(strict_types=1);

namespace PMG\BingAds;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use League\OAuth2\Client\Token\AccessToken;
use PMG\BingAds\Auth\MicrosoftProvider;
use PMG\BingAds\Exception\LogicException;

class BingSessionBuilder
{
    private $oauth;
    private $oauthClientId;
    private $oauthClientSecret;
    private $oauthRedirectUri;

    private $refreshToken;
    private $accessToken;

    private $environment = Environments::PROD;
    private $developerToken;
    private $accountId;
    private $customerId;

    public function withOAuthClientId(string $id) : self
    {
        $this->oauthClientId = $id;
        return $this;
    }

    public function withOAuthClientSecret(string $secret) : self
    {
        $this->oauthClientSecret = $secret;
        return $this;
    }

    public function withOAuthRedirectUri(string $uri) : self
    {
        $this->oauthRedirectUri = $uri;
        return $this;
    }

    public function withOAuth(OAuth2Provider $provider) : self
    {
        $this->oauth = $provider;
        return $this;
    }

    public function withRefreshToken(string $token) : self
    {
        $this->refreshToken = $token;
        return $this;
    }

    public function withAccessToken(string $token, int $expires) : self
    {
        $this->accessToken = [
            'access_token' => $token,
            'expires' => $expires,
        ];
        return $this;
    }

    public function withoutAccessToken() : self
    {
        $this->accessToken = null;
        return $this;
    }

    public function withEnvironment(string $env) : self
    {
        $this->environment = Environments::validate($env);
        return $this;
    }

    public function withDeveloperToken(string $token) : self
    {
        $this->developerToken = $token;
        return $this;
    }

    public function withAccountId(?string $id) : self
    {
        $this->accountId = $id;
        return $this;
    }

    public function withCustomerId(?string $id) : self
    {
        $this->customerId = $id;
        return $this;
    }

    public function buildOAuth() : OAuth2Provider
    { 
        if ($this->oauth) {
            return $this->oauth;
        }

        $oauthArgs = $this->buildOAuthArgs();

        return MicrosoftProvider::fromEnvironment($this->environment, $oauthArgs);
    }

    public function build() : BingSession
    {
        return new BingSession(
            $this->buildOAuth(),
            $this->ensure('refreshToken'),
            $this->ensure('developerToken'),
            $this->accountId,
            $this->customerId,
            $this->environment,
            $this->accessToken ? new AccessToken($this->accessToken) : null
        );
    }

    private function buildOAuthArgs() : array
    {
        $args = [];
        $missing = [];
        foreach (['clientId', 'clientSecret', 'redirectUri'] as $prop) {
            $p = ucwords($prop);
            $val = $this->{"oauth{$p}"};
            if (!$val) {
                $missing[] = "withOAuth{$p}";
            } else {
                $args[$prop] = $val;
            }
        }

        if ($missing) {
            $one = count($missing) === 1;
            $methods = implode(',', $missing);

            throw new LogicException(sprintf(
                'Missing OAuth credential arguments. Call %s::%s',
                __CLASS__,
                $one ? $methods : sprintf('{%s}', $methods)
            ));
        }

        return $args;
    }

    private function ensure(string $prop)
    {
        if (!isset($this->$prop)) {
            throw new LogicException(sprintf(
                'Missing %s, please call %s::with%s',
                $prop,
                __CLASS__,
                ucwords($prop)
            ));
        }

        return $this->$prop;
    }
}
