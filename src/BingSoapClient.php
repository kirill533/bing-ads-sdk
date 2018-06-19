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

    /**
     * @var ServiceDescriptor
     */
    private $serviceDescriptor;

    public function __construct(string $wsdl, array $options=[], ServiceDescriptor $sd=null)
    {
        $options['exceptions'] = true;
        parent::__construct($wsdl, $options);
        $this->serviceDescriptor = $sd ?? new ServiceDescriptor(new \ReflectionClass($this));
    }

    public function __soapCall($func, array $args, array $options, $inputHeaders, &$outputHeaders)
    {
        try {
            return parent::__soapCall($func, $args, array_merge(
                (array) $inputHeaders,
                $this->createSoapHeaders()
            ), $outputHeaders);
        } catch (\SoapFault $e) {

        }
    }

    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }

    public function setSession(BingSession $session) : void
    {
        $this->session = $session;
    }

    protected function createSoapHeaders() : array
    {
        return $this->getRequestHeaders()->soapHeadersFor(
            $this->getServiceDescriptor(),
            $this->getSession()
        );
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

    protected function getServiceDescriptor() : ServiceDescriptor
    {
        return $this->serviceDescriptor;
    }
}
