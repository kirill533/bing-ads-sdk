<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Wsdl2PhpGenerator\Service;
use Wsdl2PhpGenerator\PhpSource\PhpClass;
use Wsdl2PhpGenerator\PhpSource\PhpDocComment;
use Wsdl2PhpGenerator\PhpSource\PhpDocElementFactory;
use Wsdl2PhpGenerator\PhpSource\PhpFunction;
use Wsdl2PhpGenerator\PhpSource\PhpVariable;
use PMG\BingAds\BingSession;
use PMG\BingAds\BingSoapClient;
use PMG\BingAds\ServiceDescriptor;

class BingService extends Service
{
    protected function createPhpClass() : PhpClass
    {
        $class = parent::createPhpClass();

        $class->addConstant($this->getConfigValue('wsdlNamespace'), 'WSDL_NAMESPACE');
        $class->addConstant($this->getConfigValue('inputFile'), 'WSDL_PROD');
        $class->addConstant($this->getConfigValue('sandboxWsdl'), 'WSDL_SANDBOX');

        return $class;
    }

    protected function getServiceParentClass() : string
    {
        return '\\'.BingSoapClient::class;
    }

    protected function createConstructor() : PhpFunction
    {
        $comment = new PhpDocComment();
        $comment->addParam(PhpDocElementFactory::getParam(BingSession::class, 'session', 'A session object with credentials, etc'));
        $comment->addParam(PhpDocElementFactory::getParam('array', 'options', 'A array of config values'));
        $comment->addParam(PhpDocElementFactory::getParam('string', 'wsdl', 'The wsdl file to use'));
        $comment->addParam(PhpDocElementFactory::getParam(ServiceDescriptor::class, 'sd', 'The services descriptor for the service'));

        $source = [
            '$options["classmap"] = array_replace(self::$classmap, $options["classmap"] ?? []);',
            'parent::__construct($session, $wsdl, $options, $sd);'
        ];

        return new PhpFunction('public', '__construct', sprintf(
            '\\%s $session, string $wsdl, array $options=array(), \\%s $sd=null',
            BingSession::class,
            ServiceDescriptor::class
        ), implode(PHP_EOL, $source), $comment);
    }
}
