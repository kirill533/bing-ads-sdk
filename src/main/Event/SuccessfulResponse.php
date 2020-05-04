<?php declare(strict_types=1);

namespace PMG\BingAds\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class SuccessfulResponse extends ResponseEvent
{
    /**
     * Returns an http response that originated the successful response
     * if the soap client was created in trace mode.
     */
    public function getHttpRequest() : ?RequestInterface
    {
        return $this->bingService->lastRequest();
    }

    /**
     * Returns the successful http response if the soap client was created in
     * trace mode.
     */
    public function getHttpResponse() : ?ResponseInterface
    {
        return $this->bingService->lastResponse();
    }
}
