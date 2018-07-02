<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\InvalidService;
use PMG\BingAds\Exception\ServiceClassDoesNotExist;

final class ServiceDescriptor
{
    const NS_CONST = 'WSDL_NAMESPACE';
    const PROD_WSDL_CONST = 'WSDL_PROD';
    const SANDBOX_WSDL_CONST = 'WSDL_SANDBOX';

    /**
     * @var \ReflectionClass
     */
    private $service;

    public function __construct(\ReflectionClass $service)
    {
        if (!$service->implementsInterface(BingService::class)) {
            throw InvalidService::notAService($service->getName());
        }
        if (!self::hasRequiredConstants($service)) {
            throw InvalidService::missingConstants($service->getName());
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

    public function wsdlFor(string $env) : string
    {
        $e = Environments::validate($env);

        return $this->service->getConstant(sprintf('WSDL_%s', strtoupper($e)));
    }

    public function getClassName() : string
    {
        return $this->service->getName();
    }

    private static function hasRequiredConstants(\ReflectionClass $service) : bool
    {
        foreach ([self::NS_CONST, self::PROD_WSDL_CONST, self::SANDBOX_WSDL_CONST] as $c) {
            if (!$service->getConstant($c)) {
                return false;
            }
        }

        return true;
    }
}
