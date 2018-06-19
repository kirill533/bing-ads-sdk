<?php declare(strict_types=1);

namespace PMG\BingAds;

/**
 * A factory for generating services classes.
 *
 * @since 0.1
 */
class BingServices
{
    public function create(string $service, BingSession $session, array $soapOptions=[]) : BingService
    {
        $sd = ServiceDescriptor::fromClassName($service);
        $cls = $sd->getClassName();

        $service = new $cls($sd->wsdlFor($session->getEnvironment()), $soapOptions, $sd);
        $service->setSession($session);

        return $service;
    }
}
