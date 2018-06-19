<?php declare(strict_types=1);

namespace PMG\BingAds;

/**
 * A factory for generating services classes.
 *
 * @since 0.1
 */
class BingServices
{
/**
 * @var RequestHeaders
 */
    private $headers;

    /**
     * @var FaultParser
     */
    private $faults;

    public function __construct(RequestHeaders $headers=null, FaultParser $faults=null)
    {
        $this->headers = $headers ?? new RequestHeaders();
        $this->faults = $faults ?? new FaultParser();
    }

    public function create(string $service, BingSession $session, array $soapOptions=[]) : BingService
    {
        $sd = ServiceDescriptor::fromClassName($service);
        $cls = $sd->getClassName();

        $service = new $cls($sd->wsdlFor($session->getEnvironment()), $soapOptions, $sd);
        $service->setSession($session);
        $service->setRequestHeaders($this->headers);
        $service->setFaultParser($this->faults);

        return $service;
    }
}
