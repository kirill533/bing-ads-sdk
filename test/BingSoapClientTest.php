<?php declare(strict_types=1);

namespace PMG\BingAds;

use SoapFault;
use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use Psr\EventDispatcher\EventDispatcherInterface;
use PMG\BingAds\Auth\MicrosoftAccessToken;
use PMG\BingAds\CampaignManagement\CampaignManagementService;
use PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest;
use PMG\BingAds\Event\ErrorResponse;
use PMG\BingAds\Event\SuccessfulResponse;
use PMG\BingAds\Exception\ApiException;

class BingSoapClientTest extends TestCase
{
    private $events, $bingOAuth, $bingSession, $soapClient;

    public function testSuccessfulSoapCallsEmitSuccessEvents()
    {
        $this->soapClient->expects($this->once())
            ->method('__doRequest')
            ->willReturn('');

        $this->soapClient->getCampaignsByIds(new GetCampaignsByIdsRequest());

        $this->assertCount(1, $this->events->events);
        $this->assertInstanceOf(SuccessfulResponse::class, $this->events->events[0]);
        $this->assertSame('GetCampaignsByIds', $this->events->events[0]->getSoapFunctionName());
    }

    public function testErroredSoapCallsEmitSuccessEvents()
    {
        $this->soapClient->expects($this->once())
            ->method('__doRequest')
            ->willThrowException(new SoapFault('OH_NOZ_FAULT_CODE', 'oh noz fault string'));

        $fault = null;
        try {
            $this->soapClient->getCampaignsByIds(new GetCampaignsByIdsRequest());
        } catch (ApiException $fault) {
            // just setting $fault
        }

        $this->assertInstanceOf(ApiException::class, $fault);
        $this->assertCount(1, $this->events->events);
        $this->assertInstanceOf(ErrorResponse::class, $this->events->events[0]);
        $this->assertSame('GetCampaignsByIds', $this->events->events[0]->getSoapFunctionName());
        $this->assertSame($fault, $this->events->events[0]->getException());
    }

    protected function setUp() : void
    {
        $this->events = new class() implements EventDispatcherInterface
        {
            public $events = [];

            public function dispatch(object $event) : object
            {
                $this->events[] = $event;
                return $event;
            }
        };
        $this->bingOAuth = $this->createMock(OAuth2Provider::class);
        $this->bingSession = new BingSession(
            $this->bingOAuth,
            'refreshToken',
            'devToken',
            'accountId',
            'customerId',
            Environments::SANDBOX,
            new MicrosoftAccessToken([
                'access_token' => 'shhh',
                'expires_in' => 3600, // 1 hour from now,
            ]),
        );
        $this->soapClient = $this->getMockBuilder(CampaignManagementService::class)
            ->setConstructorArgs([
                $this->bingSession,
                CampaignManagementService::WSDL_SANDBOX
            ])
            ->setMethods([
                '__doRequest',
            ])
            ->getMock();
        $this->soapClient->setEventDispatcher($this->events);
    }
}
