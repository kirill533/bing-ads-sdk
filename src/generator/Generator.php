<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Psr\Log\LoggerInterface;
use Wsdl2PhpGenerator\ComplexType;
use Wsdl2PhpGenerator\Generator as WsdlGenerator;
use Wsdl2PhpGenerator\Operation;
use Wsdl2PhpGenerator\Xml\ServiceNode;
use Wsdl2PhpGenerator\Xml\TypeNode;

class Generator extends WsdlGenerator
{
    const FAULT_TYPES = [
        'ApplicationFault',
        'ApiFault',
        'ApiFaultDetail',
        'AdApiFaultDetail',
        'EditorialApiFaultDetail',
    ];

    public function __construct(LoggerInterface $logger=null)
    {
        parent::__construct();
        $this->setLogger($logger ?: new StreamLogger());
    }

    /**
     * {@inheritdoc}
     */
    public function loadTypes()
    {
        parent::loadTypes();
        foreach (self::FAULT_TYPES as $ft) {
            if (!$this->types->get($ft)) {
                continue;
            }

            $old = $this->types->get($ft);
            $this->types->remove($ft);
            $new = new ExceptionType($this->config, preg_replace('/Detail$/i', '', $ft));
            $new->copyFrom($old);
            $this->types->add($new, $ft);
        }
    }

    protected function createServiceFor(ServiceNode $definition) : BingService
    {
        return new BingService(
            $this->config,
            $definition->getName(),
            $this->types,
            $definition->getDocumentation()
        );
    }

    protected function createComplexType(TypeNode $typeNode) : ComplexType
    {
        if ('OfflineConversion' === $typeNode->getName()) {
            return new OfflineConversionComplexType($this->config, $typeNode->getName(), $this->types);
        }

        return parent::createComplexType($typeNode);
    }
}
