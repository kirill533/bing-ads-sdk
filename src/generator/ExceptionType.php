<?php declare(strict_types=1);

namespace PMG\BingAds\Generator;

use Wsdl2PhpGenerator\ComplexType;
use PMG\BingAds\Exception\ApiException;

class ExceptionType extends ComplexType
{
    public function copyFrom(ComplexType $other)
    {
        // ensure there's no `$message` property as the parent
        // exception class takes care of that for us.
        $this->members = $other->members;
        unset($this->members['message']);

        $this->setAbstract($other->getAbstract());
        if ($bt = $other->getBaseType()) {
            $this->setBaseType($bt);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function generateClass()
    {
        parent::generateClass();

        $modify = \Closure::bind(function () {
            // remove the constructor as we want the default exception constructor
            unset($this->functions['__construct']);

            if (!$this->extends) {
                // make sure that we extend `ApiException`
                $this->extends = '\\'.ApiException::class;
            }
        }, $this->class, $this->class);

        $modify();
    }
}
