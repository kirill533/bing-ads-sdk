<?php declare(strict_types=1);

namespace PMG\BingAds\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\BingService;
use PMG\BingAds\Exception\ApiException;

final class ErrorResponse extends ResponseEvent
{
    /**
     * @var ApiException
     */
    private $exception;

    public function __construct(BingService $bingService, string $soapFunctionName, ApiException $exception)
    {
        parent::__construct($bingService, $soapFunctionName);
        $this->exception = $exception;
    }

    /**
     * Returns an http response that originated the successful response
     * if the soap client was created in trace mode.
     */
    public function getHttpRequest() : ?RequestInterface
    {
        return $this->exception->getRequest();
    }

    /**
     * Returns the error http response if the soap client was created in
     * trace mode.
     */
    public function getHttpResponse() : ?ResponseInterface
    {
        return $this->exception->getResponse();
    }

    public function getException() : ApiException
    {
        return $this->exception;
    }
}
