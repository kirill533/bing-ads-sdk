<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use PMG\BingAds\BingException;

class ApiException extends \RuntimeException implements BingException
{
    /**
     * @var RequestInterface|null
     */
    private $request;

    /**
     * @var ResponseInterface|null
     */
    private $response;

    public function setRequest(?RequestInterface $request) : void
    {
        $this->request = $request;
    }

    public function getRequest() : ?RequestInterface
    {
        return $this->request;
    }

    public function setResponse(?ResponseInterface $response) : void
    {
        $this->response = $response;
    }

    public function getResponse() : ?ResponseInterface
    {
        return $this->response;
    }
}
