<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\ApiException;

class BingSoapClient extends \SoapClient implements BingService
{
    /**
     * @var array
     */
    private $classmap;

    /**
     * @var bool
     */
    private $trace;

    /**
     * @var string
     */
    private $wsdlScheme;

    /**
     * @var BingSession
     */
    private $session;

    /**
     * @var RequestHeaders
     */
    private $headers;

    /**
     * @var FaultParser
     */
    private $faults;

    /**
     * @var PsrMessageConverter
     */
    private $messageConverter;

    /**
     * @var ServiceDescriptor
     */
    private $serviceDescriptor;

    public function __construct(BingSession $session, string $wsdl, array $options=[], ServiceDescriptor $sd=null)
    {
        $options['exceptions'] = true;
        parent::__construct($wsdl, $options);
        $this->classmap = $options['classmap'] ?? [];
        $this->trace = filter_var($options['trace'] ?? false, FILTER_VALIDATE_BOOLEAN);
        $this->wsdlScheme = parse_url($wsdl, PHP_URL_SCHEME);
        $this->session = $session;
        $this->serviceDescriptor = $sd ?? new ServiceDescriptor(new \ReflectionClass($this));
    }

    public function __soapCall($func, $args, $options=null, $inputHeaders=null, &$outputHeaders=null)
    {
        try {
            return parent::__soapCall($func, $args, $options, array_merge(
                (array) $inputHeaders,
                $this->createSoapHeaders()
            ), $outputHeaders);
        } catch (\SoapFault $fault) {
            $exception = $this->getFaultParser()->toException($fault, $this->classmap);
            $this->maybePopulateRequestResponse($exception);
            throw $exception;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function setFaultParser(FaultParser $faults) : void
    {
        $this->faults = $faults;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageConverter(PsrMessageConverter $converter) : void
    {
        $this->messageConverter = $converter;
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

    protected function getFaultParser() : FaultParser
    {
        if (!$this->faults) {
            $this->faults = new FaultParser();
        }

        return $this->faults;
    }

    protected function getMessageConverter() : PsrMessageConverter
    {
        if (!$this->messageConverter) {
            $this->messageConverter = new PsrMessageConverter();
        }

        return $this->messageConverter;
    }

    protected function getSession() : BingSession
    {
        return $this->session;
    }

    protected function getServiceDescriptor() : ServiceDescriptor
    {
        return $this->serviceDescriptor;
    }

    protected function maybePopulateRequestResponse(ApiException $ex) : void
    {
        if (!$this->trace) {
            return;
        }

        $request = $this->getMessageConverter()->createRequest(
            $this->__getLastRequestHeaders(),
            $this->__getLastRequest(),
            $this->wsdlScheme // guess that the scheme for requests is the same as the WSDL
        );
        $response = $this->getMessageConverter()->createResponse(
            $this->__getLastResponseHeaders(),
            $this->__getLastResponse()
        );

        $ex->setRequest($request);
        $ex->setResponse($response);
    }
}
