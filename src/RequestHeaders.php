<?php declare(strict_types=1);

namespace PMG\BingAds;

/**
 * Generates request headers for SOAP requests. This may include HTTP headers
 * or soap headers.
 */
class RequestHeaders
{
    /**
     * @return \SoapHeader[]
     */
    public function soapHeadersFor(ServiceDescriptor $service, BingSession $session) : array
    {
        $ns = $service->getSoapHeaderNamespace();
        return [
            new \SoapHeader($ns, 'CustomerAccountId', $session->getAccountId()),
            new \SoapHeader($ns, 'CustomerId', $session->getCustomerId()),
            new \SoapHeader($ns, 'DeveloperToken', $session->getDeveloperToken()),
            new \SoapHeader($ns, 'AuthenticationToken', (string) $session->getOrRefreshAccessToken()),
        ];
    }
}
