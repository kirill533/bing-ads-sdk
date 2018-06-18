<?php declare(strict_types=1);

namespace PMG\BingAds;

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
            throw Exception\InvalidService::notAService($service->getName());
        }
        if (!$service->getConstant(self::NS_CONST)) {
            throw Exception\InvalidService::noXmlNamespace($service->getName());
        }

        $this->service = $service;
    }

    private static function fromClassName(string $fqcn) : self
    {
        try {
            return new self(new \ReflectionClass($fqcn));
        } catch (\Exception $e) {
            throw Exception\ServiceClassDoesNotExist::wrap($e);
        }
    }

    public function getWsdlNamespace() : string
    {
        return (string) $this->service->getConstant(self::NS_CONST);
    }

    public function getClassName() : string
    {
        return $this->service->getName();
    }
}
