<?php declare(strict_types=1);

namespace PMG\BingAds\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\BingService;

abstract class ResponseEvent
{
    /**
     * @var BingService
     */
    protected $bingService;

    /**
     * @var string
     */
    private $soapFunctionName;

    public function __construct(BingService $bingService, string $soapFunctionName)
    {
        $this->bingService = $bingService;
        $this->soapFunctionName = $soapFunctionName;
    }

    public function getSoapFunctionName() : string
    {
        return $this->soapFunctionName;
    }

    /**
     * Return the HTTP request that originated the event. This will be a
     * request object if the BingSoapClient was created with the `trace`
     * option set to true.
     *
     * @return RequestInterface|null A request object if the soap client was created
     *         in trace mode
     */
    abstract public function getHttpRequest() : ?RequestInterface;

    /**
     * Return the HTTP response that originated the event. This will be a
     * response object if the BingSoapClient was created with the `trace`
     * option set to true.
     *
     * @return ResponseInterface|null A request object if the soap client was created
     *         in trace mode
     */
    abstract public function getHttpResponse() : ?ResponseInterface;
}
