<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\LogicException;

class BingSoapClient extends \SoapClient implements BingService
{
    /**
     * @var RequestHeaders
     */
    private $headers;

    /**
     * @var BingSession
     */
    private $session;

    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }

    public function setSession(BingSession $session) : void
    {
        $this->session = $session;
    }

    protected function soapHeadersFor(ServiceDescriptor $service, BingSession $session) : array
    {
        return $this->getRequestHeaders()->soapHeaderFor($service, $session);
    }

    protected function getRequestHeaders() : RequestHeaders
    {
        if (!$this->headers) {
            $this->headers = new RequestHeaders();
        }
                
        return $this->headers;
    }

    protected function getSession() : BingSession
    {
        if (!$this->session) {
            throw new LogicException(sprintf(
                '%1$s does not have a BingSession set, call %1$s::setSession or use %2$s to create service objects',
                get_class($this),
                BingServices::class
            ));
        }

        return $this->session;
    }
}
