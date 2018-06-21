<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\BingService;

abstract class AbstractService implements BingService
{
    use \PMG\BingAds\BingServiceDependencies;

    public function lastRequest() : ?RequestInterface
    {
        return null;
    }

    public function lastResponse() : ?ResponseInterface
    {
        return null;
    }
}
