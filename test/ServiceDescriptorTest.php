<?php declare(strict_types=1);

namespace PMG\BingAds;

use PMG\BingAds\Exception\InvalidService;
use PMG\BingAds\Exception\ServiceClassDoesNotExist;
use PMG\BingAds\Fixtures\ServiceNotImplementingBingService;
use PMG\BingAds\Fixtures\ServiceWithoutNamespaceConstant;
use PMG\BingAds\Fixtures\ValidService;

class ServiceDescriptorTest extends TestCase
{
    public function testNonExistentClassesCannotBeUsedToCreateServiceDescriptors()
    {
        $this->expectException(ServiceClassDoesNotExist::class);

        ServiceDescriptor::fromClassName(DoesNotExistAtAll::class);
    }

    public function testClassesThatDoNotImplementBingServiceCannotBeUsedAsServiceDescriptors()
    {
        $this->expectException(InvalidService::class);
        $this->expectExceptionMessage(BingService::class);

        ServiceDescriptor::fromClassName(ServiceNotImplementingBingService::class);
    }

    public function testClassesWithoutNamespaceConstantCannotBeUsedAsServiceDesciptors()
    {
        $this->expectException(InvalidService::class);
        $this->expectExceptionMessage(ServiceDescriptor::NS_CONST);

        ServiceDescriptor::fromClassName(ServiceWithoutNamespaceConstant::class);
    }

    public function testValidServiceClassesCanBeUsedAsServiceDescriptors()
    {
        $sd = ServiceDescriptor::fromClassName(ValidService::class);

        $this->assertSame(ValidService::WSDL_NAMESPACE, $sd->getSoapHeaderNamespace());
        $this->assertSame(ValidService::class, $sd->getClassName());
        $this->assertSame(ValidService::WSDL_PROD, $sd->wsdlFor(Environments::PROD));
        $this->assertSame(ValidService::WSDL_SANDBOX, $sd->wsdlFor(Environments::SANDBOX));
    }
}
