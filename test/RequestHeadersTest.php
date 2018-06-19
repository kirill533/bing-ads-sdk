<?php declare(strict_types=1);

namespace PMG\BingAds;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use League\OAuth2\Client\Token\AccessToken;
use PMG\BingAds\Fixtures\ValidService;

class RequestHeadersTest extends TestCase
{
    private $headers, $session, $service;

    public function testSoapHeadersForReturnsTheExpectedHeaders()
    {
        $headers = $this->headers->soapHeadersFor($this->service, $this->session);

        $this->assertEquals([
            new \SoapHeader(ValidService::WSDL_NAMESPACE, 'CustomerAccountId', 'accountid'),
            new \SoapHeader(ValidService::WSDL_NAMESPACE, 'CustomerId', 'customerid'),
            new \SoapHeader(ValidService::WSDL_NAMESPACE, 'DeveloperToken', 'devtoken'),
            new \SoapHeader(ValidService::WSDL_NAMESPACE, 'AuthenticationToken', 'shhh'),
        ], $headers);
    }

    protected function setUp()
    {
        $this->headers = new RequestHeaders();
        $this->session = new BingSession(
            $this->createMock(OAuth2Provider::class),
            'refreshtoken',
            'devtoken',
            'accountid',
            'customerid',
            new AccessToken([
                'access_token' => 'shhh',
                'expires' => time() + 100000,
            ])
        );
        $this->service = ServiceDescriptor::fromClassName(ValidService::class);
    }
}
