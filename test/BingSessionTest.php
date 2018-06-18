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

    private function willFetchAccessToken(AccessToken $token) : void
    {
    }
}
