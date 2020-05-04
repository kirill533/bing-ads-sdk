<?php declare(strict_types=1);

namespace PMG\BingAds;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Header interface for the bing services.
 *
 * All the setters here are less than ideal.
 *
 * @since 0.1
 */
interface BingService
{
    /**
     * Get the last request.
     *
     * @return RequestInterface|null Will be null if the client is created without
     *         the `trace` option set to true
     */
    public function lastRequest() : ?RequestInterface;

    /**
     * Get the last response
     *
     * @return ResponseInterface|null Will be null if the client is created without
     *         the `trace` option set to true
     */
    public function lastResponse() : ?ResponseInterface;

    /**
     * Set the request headers implementation for the client.
     */
    public function setRequestHeaders(RequestHeaders $headers) : void;

    /**
     * Set the fault parser implementation
     */
    public function setFaultParser(FaultParser $faults) : void;

    /**
     * Set a message converter for the client
     */
    public function setMessageConverter(PsrMessageConverter $converter) : void;

    /**
     * set the event dispatcher for the service.
     */
    public function setEventDispatcher(EventDispatcherInterface $events) : void;
}
