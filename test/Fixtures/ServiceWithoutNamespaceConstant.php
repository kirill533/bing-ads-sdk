<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\BingService;

class ServiceWithoutNamespaceConstant implements BingService
{
    use ConverterMethod;
    use FaultsMethod;
    use RequestHeadersMethod;
    use SessionMethod;
}
