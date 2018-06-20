<?php declare(strict_types=1);

namespace PMG\BingAds;

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
}
