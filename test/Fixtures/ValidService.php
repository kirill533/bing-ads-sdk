<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\BingService;
use PMG\BingAds\RequestHeaders;

class ValidService implements BingService
{
    const WSDL_NAMESPACE = 'testme';

    public $headers;

    public function setRequestHeaders(RequestHeaders $headers) : void
    {
        $this->headers = $headers;
    }
}
