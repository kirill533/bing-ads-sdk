<?php declare(strict_types=1);

namespace PMG\BingAds;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use League\OAuth2\Client\Token\AccessToken;

class BingSessionTest extends TestCase
{
    const REFRESH = 'resfreshmepls';

    private $oauth;

    public function testGetResfreshTokenReturnsValueFromConstructor()
    {
        $s = new BingSession($this->oauth, 'testrefresh', 'ignored', null, null);

        $this->assertSame('testrefresh', $s->getRefreshToken());
    }

    public function testGetDeveloperTokenReturnsValueFromConstructor()
    {
        $s = new BingSession($this->oauth, 'ignored', 'testdev', null, null);

        $this->assertSame('testdev', $s->getDeveloperToken());
    }

    public function testGetAccountIdReturnsValueFromConstructor()
    {
        $s = new BingSession($this->oauth, 'ignored', 'ignored', 'testaccount', null);

        $this->assertSame('testaccount', $s->getAccountId());
    }

    public function testGetCustomerIdReturnsValueFromConstructor()
    {
        $s = new BingSession($this->oauth, 'ignored', 'ignored', null, 'testcustomer');

        $this->assertSame('testcustomer', $s->getCustomerId());
    }

    public function testGetEnvironmentReturnsProdWhenNoEnvironmentIsPassedIn()
    {
        $s = new BingSession($this->oauth, 'testrefresh', 'ignored', null, null);

        $this->assertSame(Environments::PROD, $s->getEnvironment());
    }

    public function testGetEnvironmentReturnsValueFromConstructorWhenSet()
    {
        $s = new BingSession($this->oauth, 'testrefresh', 'ignored', null, null, Environments::SANDBOX);

        $this->assertSame(Environments::SANDBOX, $s->getEnvironment());
    }

    public function testGetOrRefreshAccessTokenFetchesNewTokenWhenOneIsNotSet()
    {
        $token = $this->createToken();
        $this->oauth->expects($this->once())
            ->method('getAccessToken')
            ->with('refresh_token', ['refresh_token' => self::REFRESH])
            ->willReturn($token);
        $sess = $this->createSession();

        $result = $sess->getOrRefreshAccessToken();

        $this->assertSame($token, $result);
    }

    public function testGetOrRefreshAccessTokenFetchesNewTokenWhenCurrentTokenIsExpired()
    {
        $oldToken = $this->createToken(time() - 10000);
        $newToken = $this->createToken();
        $this->oauth->expects($this->once())
            ->method('getAccessToken')
            ->with('refresh_token', ['refresh_token' => self::REFRESH])
            ->willReturn($newToken);
        $sess = $this->createSession($oldToken);

        $result = $sess->getOrRefreshAccessToken();

        $this->assertSame($newToken, $result);
    }

    public function testGetOrRefreshAccessTokenReturnsTheTokenDirectlyWhenTheTokenIsNotExpired()
    {
        $token = $this->createToken();
        $this->oauth->expects($this->never())
            ->method('getAccessToken');
        $sess = $this->createSession($token);

        $result = $sess->getOrRefreshAccessToken();

        $this->assertSame($token, $result);
    }

    public function testBuilderCanBeUsedToBuildSession()
    {
        $s = BingSession::builder()
            ->withEnvironment(BingSession::SANDBOX)
            ->withOAuthClientId('oauthid')
            ->withOAuthClientSecret('oauthsecret')
            ->withOAuthRedirectUri('http://localhost/oauth')
            ->withDeveloperToken('devToken')
            ->withRefreshToken('ssh')
            ->withCustomerId('customer')
            ->withAccountId('account')
            ->build();

        $this->assertInstanceOf(BingSession::class, $s);
    }

    public function testSessionCanBeBuildWithOauthProvider()
    {
        $s = BingSession::builder()
            ->withOAuth($this->oauth)
            ->withDeveloperToken('devToken')
            ->withRefreshToken('ssh')
            ->withCustomerId('customer')
            ->withAccountId('account')
            ->build();

        $this->assertInstanceOf(BingSession::class, $s);
    }

    public function testBuildingErrorsWhenOAuthValuesAreNotProvided()
    {
        $this->expectException(\LogicException::class);
        BingSession::builder()
            ->withDeveloperToken('devToken')
            ->withRefreshToken('ssh')
            ->withCustomerId('customer')
            ->withAccountId('account')
            ->build();
    }

    public function testBuildingErrorsWhenRefreshTokenIsNotSet()
    {
        $this->expectException(\LogicException::class);
        BingSession::builder()
            ->withOAuth($this->oauth)
            ->withDeveloperToken('devToken')
            ->withCustomerId('customer')
            ->withAccountId('account')
            ->build();
    }

    public function testBuildingErrorsWhenDeveloperTokenIsNotSet()
    {
        $this->expectException(\LogicException::class);
        BingSession::builder()
            ->withOAuth($this->oauth)
            ->withRefreshToken('shhh')
            ->withCustomerId('customer')
            ->withAccountId('account')
            ->build();
    }

    protected function setUp()
    {
        $this->oauth = $this->createMock(OAuth2Provider::class);
    }

    private function createSession(?AccessToken $token=null) : BingSession
    {
        return new BingSession(
            $this->oauth,
            self::REFRESH,
            'ignored_dev_token',
            'ignored_account_id',
            'ignored_customer_id',
            null,
            $token
        );
    }

    private function createToken(int $expires=null) : AccessToken
    {
        return new AccessToken([
            'access_token' => 'shhh',
            'expires' => $expires ?? time() + 10000,
        ]);
    }
}
