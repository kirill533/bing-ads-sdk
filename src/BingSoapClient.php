<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\ProgrammerError;

class BingSoapClient extends \SoapClient implements BingService
{
    /**
     * @var RequestHeaders
     */
    private $headers;

    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
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
}
