<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\BingService;
use PMG\BingAds\RequestHeaders;

class ValidService implements BingService
{
    use FaultsMethod;
    use RequestHeadersMethod;
    use SessionMethod;

    const WSDL_NAMESPACE = 'testme';
    const WSDL_PROD = 'http://www.example.com/soap.wsdl';
    const WSDL_SANDBOX = 'http://www.example.com/soap.wsdl';
}
