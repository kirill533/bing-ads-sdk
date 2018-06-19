<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\LogicException;

class BingSoapClient extends \SoapClient implements BingService
{
    /**
     * @var array
     */
    private $classmap;

    /**
     * @var RequestHeaders
     */
    private $headers;

    /**
     * @var BingSession
     */
    private $session;

    /**
     * @var FaultParser
     */
    private $faults;

    /**
     * @var ServiceDescriptor
     */
    private $serviceDescriptor;

    public function __construct(string $wsdl, array $options=[], ServiceDescriptor $sd=null)
    {
        $options['exceptions'] = true;
        parent::__construct($wsdl, $options);
        $this->classmap = $options['classmap'] ?? [];
        $this->serviceDescriptor = $sd ?? new ServiceDescriptor(new \ReflectionClass($this));
    }

    public function __soapCall($func, $args, $options=null, $inputHeaders=null, &$outputHeaders=null)
    {
        try {
            return parent::__soapCall($func, $args, array_merge(
                (array) $inputHeaders,
                $this->createSoapHeaders()
            ), $outputHeaders);
        } catch (\SoapFault $fault) {
            $exception = $this->getFaultParser()->toException($fault, $this->classmap);
            if (null !== $exception) {
                throw $exception;
            }
            throw $fault;
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

    protected function getFaultParser() : FaultParser
    {
        if (!$this->faults) {
            $this->faults = new FaultParser();
        }

        return $this->faults;
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

    /**
     * the PHP soap libary does not parse fault responses into the domain
     * objects provided in `classmap`.
     *
     * When a `SoapFault` comes back it's `detail` property will have a `stdObject`
     * with a single key that is the name of the actual type. That key has a
     * `stdObject` value with all the properties we need to populate our
     * API exception object(s).
     */
    protected function toLibraryException(\SoapFault $e) : ?ApiException
    {
        if (!isset($e->detail)) {
            return null;
        }

        $type = key(get_object_vars($e->detail));
        $fault = current(get_object_vars($e->detail));

        var_dump($this->__getLastResponse());
        var_dump($type, $fault);

        return null;
    }
}
