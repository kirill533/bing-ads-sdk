<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PsrMessageConverterTest extends TestCase
{
    private $converter;

    const REQUEST_BODY = <<<END
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ns1="https://bingads.microsoft.com/CampaignManagement/v12">
    <SOAP-ENV:Header>
        <ns1:CustomerAccountId/><ns1:CustomerId/>
        <ns1:DeveloperToken attr="one">devtoken</ns1:DeveloperToken>
        <ns1:AuthenticationToken>authtoken</ns1:AuthenticationToken>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <ns1:GetCampaignsByIdsRequest>
            <ns1:CampaignIds xsi:nil="true"/>
        </ns1:GetCampaignsByIdsRequest>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
END;

    const RESPONSE_BODY = <<<END
<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/">
    <s:Body>
        <s:Fault>
            <faultcode>s:Server</faultcode>
            <faultstring xml:lang="en-US">borked</faultstring>
            <detail>
                <AdApiFaultDetail xmlns="https://adapi.microsoft.com" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                    <TrackingId>anid</TrackingId>
                    <Errors>
                        <AdApiError>
                            <Code>109</Code>
                            <Detail i:nil="true"/>
                            <ErrorCode>AuthenticationTokenExpired</ErrorCode>
                            <Message>Authentication token expired</Message>
                        </AdApiError>
                    </Errors>
                </AdApiFaultDetail>
            </detail>
        </s:Fault>
    </s:Body>
</s:Envelope>
END;

    public function testCreateRequestReturnsNullWhenHeadersAreEmpty()
    {
        $result = $this->converter->createRequest(null, 'a body here', 'https');

        $this->assertNull($result);
    }

    public function testCreateRequestReturnsNullWhenBodyIsEmpty()
    {
        $result = $this->converter->createRequest('GET /a_thing HTTP/1.1', null, 'https');

        $this->assertNull($result);
    }

    public function testCreateResponseReturnsNullWhenHeadersAreEmpty()
    {
        $result = $this->converter->createResponse(null, 'a body here');

        $this->assertNull($result);
    }

    public function testCreateResponseReturnsNullWhenBodyIsEmpty()
    {
        $result = $this->converter->createResponse('HTTP/1.1 200 OK', null);

        $this->assertNull($result);
    }

    public function testCreateRequestReturnsAPsr7ResponseObject()
    {
        $result = $this->converter->createRequest(implode("\r\n", [
            'GET /a_thing HTTP/1.1',
            'Host: example.com'
        ]), self::REQUEST_BODY, 'https');

        $this->assertInstanceOf(RequestInterface::class, $result);
        $this->assertEquals('https://example.com/a_thing', (string) $result->getUri());
        $this->assertEquals(['example.com'], $result->getHeader('Host'));
        $this->assertContains('<SOAP-ENV:Envelope', (string) $result->getBody());
    }

    public function testCreateRequestScrubsSensitiveInformationFromResponseBody()
    {
        $result = $this->converter->createRequest(implode("\r\n", [
            'GET /a_thing HTTP/1.1',
            'Host: example.com'
        ]), self::REQUEST_BODY, 'https');

        $body = (string) $result->getBody();
        $this->assertNotContains('authtoken', $body);
        $this->assertNotContains('devtoken', $body);
    }

    public function testCreateResponseReturnsAPsr7ResponseObject()
    {
        $result = $this->converter->createResponse(implode("\r\n", [
            'HTTP/1.1 500 Internal Server Error',
            'Content-Type: text/xml',
        ]), self::RESPONSE_BODY);

        $this->assertInstanceOf(ResponseInterface::class, $result);
        $this->assertEquals(500, $result->getStatusCode());
        $this->assertEquals(['text/xml'], $result->getHeader('Content-Type'));
        $this->assertEquals(self::RESPONSE_BODY, (string) $result->getBody());
    }

    protected function setUp()
    {
        $this->converter = new PsrMessageConverter();
    }
}
