<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\InvalidService;
use PMG\BingAds\Exception\ServiceClassDoesNotExist;

final class ServiceDescriptor
{
    const NS_CONST = 'WSDL_NAMESPACE';

    /**
     * @var \ReflectionClass
     */
    private $service;

    public function __construct(\ReflectionClass $service)
    {
        if (!$service->implementsInterface(BingService::class)) {
            throw InvalidService::notAService($service->getName());
        }
        if (!$service->getConstant(self::NS_CONST)) {
            throw InvalidService::noXmlNamespace($service->getName());
        }

        $this->service = $service;
    }

    public static function fromClassName(string $fqcn) : self
    {
        try {
            return new self(new \ReflectionClass($fqcn));
        } catch (\ReflectionException $e) {
            throw ServiceClassDoesNotExist::wrap($e);
        }
    }

    public function getSoapHeaderNamespace() : string
    {
        return (string) $this->service->getConstant(self::NS_CONST);
    }

    public function getClassName() : string
    {
        return $this->service->getName();
    }
}
