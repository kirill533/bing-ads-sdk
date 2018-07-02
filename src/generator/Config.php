<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Psr\Log\LoggerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Wsdl2PhpGenerator\Config as WsdlConfig;

class Config extends WsdlConfig
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setRequired([
            'wsdlNamespace',
            'sandboxWsdl',
        ]);
        $resolver->setAllowedTypes('sandboxWsdl', 'string');
        $resolver->setAllowedTypes('wsdlNamespace', 'string');
    }
}
