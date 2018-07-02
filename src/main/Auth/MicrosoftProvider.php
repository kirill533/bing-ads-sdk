<?php declare(strict_types=1);

namespace PMG\BingAds\Auth;

use GuzzleHttp\Psr7\Uri;
use League\OAuth2\Client\Grant\AbstractGrant;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\Environments;
use PMG\BingAds\Exception\InvalidApiEnvironment;

final class MicrosoftProvider extends AbstractProvider
{
    const PROD = Environments::PROD;
    const SANDBOX = Environments::SANDBOX;
    const AUTHORIZE_PROD = 'https://login.live.com/oauth20_authorize.srf';
    const AUTHORIZE_SANDBOX = 'https://login.live-int.com/oauth20_authorize.srf';
    const TOKEN_PROD = 'https://login.live.com/oauth20_token.srf';
    const TOKEN_SANDBOX = 'https://login.live-int.com/oauth20_token.srf';
    const OWNER_PROD = 'https://apis.live.net/v5.0/me';

    /**
     * @var string[]
     */
    public $defaultScopes = ['bingads.manage'];

    /**
     * @var string
     */
    protected $urlAuthorize = self::AUTHORIZE_PROD;

    /**
     * @var string
     */
    protected $urlAccessToken = self::TOKEN_PROD;

    /**
     * @var string
     */
    protected $urlResourceOwnerDetails = self::OWNER_PROD;

    /**
     * @var int
     */
    protected $tokenExpiresThreshold = MicrosoftAccessToken::DEFAULT_THRESHOLD;

    public static function fromEnvironment(string $env, array $options) : self
    {
        switch (strtolower($env)) {
            case self::PROD:
                return self::production($options);
            case self::SANDBOX:
                return self::sandbox($options);
            default:
                throw new InvalidApiEnvironment($env);
        }
    }

    public static function production(array $options) : self
    {
        return new self(array_replace($options, [
            'urlAuthorize' => self::AUTHORIZE_PROD,
            'urlAccessToken' => self::TOKEN_PROD,
        ]));
    }

    public static function sandbox(array $options) : self
    {
        return new self(array_replace($options, [
            'urlAuthorize' => self::AUTHORIZE_SANDBOX,
            'urlAccessToken' => self::TOKEN_SANDBOX,
        ]));
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAuthorizationUrl() : string
    {
        return $this->urlAuthorize;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAccessTokenUrl(array $params) : string
    {
        return $this->urlAccessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token) : string
    {
        $uri = new Uri($this->urlResourceOwnerDetails);
        return (string) Uri::withQueryValue($uri, 'access_token', (string) $token);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultScopes() : array
    {
        return $this->defaultScopes;
    }

    /**
     * {@inheritdoc}
     */
    protected function checkResponse(ResponseInterface $response, $data) : void
    {
        if (isset($data['error'])) {
            throw new Exception\AuthenticationError(
                trim(json_encode($data['error']), '"'),
                $response->getStatusCode(),
                $response
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function createResourceOwner(array $response, AccessToken $token) : MicrosoftResourceOwner
    {
        return new MicrosoftResourceOwner($response);
    }

    /**
     * {@inheritdoc}
     */
    protected function createAccessToken(array $response, AbstractGrant $grant) : MicrosoftAccessToken
    {
        return new MicrosoftAccessToken($response, $this->tokenExpiresThreshold);
    }

    /**
     * {@inheritdoc}
     */
    protected function getAccessTokenResourceOwnerId() : string
    {
        return 'user_id';
    }
}
