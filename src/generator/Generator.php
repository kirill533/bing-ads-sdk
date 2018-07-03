<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Psr\Log\LoggerInterface;
use Wsdl2PhpGenerator\Generator as WsdlGenerator;
use Wsdl2PhpGenerator\Operation;

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

    /**
     * {@inheritdoc}
     */
    protected function loadService()
    {
        $service = $this->wsdl->getService();
        $this->log('Starting to load service ' . $service->getName());

        $this->service = new BingService($this->config, $service->getName(), $this->types, $service->getDocumentation());

        foreach ($this->wsdl->getOperations() as $function) {
            $this->log('Loading function ' . $function->getName());

            $this->service->addOperation(new Operation($function->getName(), $function->getParams(), $function->getDocumentation(), $function->getReturns()));
        }

        $this->log('Done loading service ' . $service->getName());
    }
}
