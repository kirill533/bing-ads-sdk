<?php declare(strict_types=1);

namespace PMG\BingAds;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use League\OAuth2\Client\Token\AccessToken;

/**
 * Encapsulates the configuration needed to make each request.
 *
 * @since 0.1
 */
class BingSession
{
    /**
     * @var OAuth2Provider
     */
    private $oauth;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var string
     */
    private $developerToken;

    /**
     * @var string
     */
    private $environment;

    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var AccessToken
     */
    private $currentToken;

    public function __construct(
        OAuth2Provider $oauth,
        string $refreshToken,
        string $developerToken,
        ?string $accountId,
        ?string $customerId,
        ?string $environment=null,
        ?AccessToken $currentToken=null
    ) {
        $this->oauth = $oauth;
        $this->refreshToken = $refreshToken;
        $this->developerToken = $developerToken;
        $this->accountId = $accountId;
        $this->customerId = $customerId;
        $this->environment = $environment ? Environments::validate($environment) : Environments::PROD;
        $this->currentToken = $currentToken;
    }

    public function getRefreshToken() : string
    {
        return $this->refreshToken;
    }

    public function getDeveloperToken() : string
    {
        return $this->developerToken;
    }

    public function getAccountId() : ?string
    {
        return $this->accountId;
    }

    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }

    public function getEnvironment() : string
    {
        return $this->environment;
    }

    public function getOrRefreshAccessToken() : AccessToken
    {
        if (!$this->hasValidToken()) {
            $this->currentToken = $this->getNewAccessToken();
        }

        return $this->currentToken;
    }

    private function hasValidToken() : bool
    {
        try {
            return $this->currentToken && !$this->currentToken->hasExpired();
        } catch (\RuntimeException $e) {
            // throw if the token has no expiration by the OAuth2 Client Library
            // in those cases, we can say, "yep, it's no longer valid"
            return false;
        }
    }

    private function getNewAccessToken() : AccessToken
    {
        return $this->oauth->getAccessToken('refresh_token', [
            'refresh_token' => $this->refreshToken,
        ]);
    }
}
