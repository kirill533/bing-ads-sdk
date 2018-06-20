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
        $headers = [
            new \SoapHeader($ns, 'DeveloperToken', $session->getDeveloperToken()),
            new \SoapHeader($ns, 'AuthenticationToken', (string) $session->getOrRefreshAccessToken()),
        ];

        if ($aid = $session->getAccountId()) {
            $headers[] = new \SoapHeader($ns, 'CustomerAccountId', $session->getAccountId());
        }

        if ($cid = $session->getCustomerId()) {
            $headers[] = new \SoapHeader($ns, 'CustomerId', $session->getCustomerId());
        }

        return $headers;
    }
}
