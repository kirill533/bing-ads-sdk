<?php

/*
 * This file is part of pmg/googleads-ddp
 *
 * Copyright (c) PMG <https://www.pmg.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PMG\Ddp\Generator;


use Wsdl2PhpGenerator\ConfigInterface;
use Wsdl2PhpGenerator\ComplexType;
use Wsdl2PhpGenerator\Validator;
use Wsdl2PhpGenerator\PhpSource\PhpClass;
use Wsdl2PhpGenerator\PhpSource\PhpDocComment;
use Wsdl2PhpGenerator\PhpSource\PhpDocElementFactory;
use Wsdl2PhpGenerator\PhpSource\PhpFunction;
use Wsdl2PhpGenerator\PhpSource\PhpVariable;
use PMG\Ddp\Exception\ApiException;

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
        if ($this->class != null) {
            throw new \Exception("The class has already been generated");
        }

        $this->class = new PhpClass(
            $this->phpIdentifier,
            false,
            $this->getBaseTypeClass() ?: '\\'.ApiException::class,
            null,
            false,
            $this->abstract
        );

        // as usually with this library, a bunch of copy pasta bullshit.
        $accessors = [];
        foreach ($this->members as $member) {
            $type = Validator::validateType($member->getType());
            $name = Validator::validateAttribute($member->getName());
            $typeHint = Validator::validateTypeHint($type);

            $comment = new PhpDocComment();
            $comment->setVar(PhpDocElementFactory::getVar($type, $name, ''));
            $var = new PhpVariable('protected', $name, 'null', $comment);
            $this->class->addVariable($var);

            if (!$member->getNullable()) {
                if ($type == '\DateTime') {
                    if ($this->config->get('constructorParamsDefaultToNull')) {
                        $constructorSource .= '  $this->' . $name . ' = $' . $name . ' ? $' . $name . '->format(\DateTime::ATOM) : null;' . PHP_EOL;
                    } else {
                        $constructorSource .= '  $this->' . $name . ' = $' . $name . '->format(\DateTime::ATOM);' . PHP_EOL;
                    }
                } else {
                    $constructorSource .= '  $this->' . $name . ' = $' . $name . ';' . PHP_EOL;
                }
                $constructorComment->addParam(PhpDocElementFactory::getParam($type, $name, ''));
                $constructorParameters[$name] = $typeHint;
            }

            $getterComment = new PhpDocComment();
            $getterComment->setReturn(PhpDocElementFactory::getReturn($type, ''));
            if ($type == '\DateTime') {
                $getterCode = '  if ($this->' . $name . ' == null) {' . PHP_EOL
                    . '    return null;' . PHP_EOL
                    . '  } else {' . PHP_EOL
                    . '    try {' . PHP_EOL
                    . '      return new \DateTime($this->' . $name . ');' . PHP_EOL
                    . '    } catch (\Exception $e) {' . PHP_EOL
                    . '      return false;' . PHP_EOL
                    . '    }' . PHP_EOL
                    . '  }' . PHP_EOL;
            } else {
                $getterCode = '  return $this->' . $name . ';' . PHP_EOL;
            }
            $getter = new PhpFunction('public', 'get' . ucfirst($name), '', $getterCode, $getterComment);
            $accessors[] = $getter;

            $setterComment = new PhpDocComment();
            $setterComment->addParam(PhpDocElementFactory::getParam($type, $name, ''));
            $setterComment->setReturn(PhpDocElementFactory::getReturn($this->phpNamespacedIdentifier, ''));
            if ($type == '\DateTime') {
                if ($member->getNullable()) {
                    $setterCode = '  if ($' . $name . ' == null) {' . PHP_EOL
                        . '   $this->' . $name . ' = null;' . PHP_EOL
                        . '  } else {' . PHP_EOL
                        . '    $this->' . $name . ' = $' . $name . '->format(\DateTime::ATOM);' . PHP_EOL
                        . '  }' . PHP_EOL;
                } else {
                    $setterCode = '  $this->' . $name . ' = $' . $name . '->format(\DateTime::ATOM);' . PHP_EOL;
                }
            } else {
                $setterCode = '  $this->' . $name . ' = $' . $name . ';' . PHP_EOL;
            }
            $setterCode .= '  return $this;' . PHP_EOL;
            $setter = new PhpFunction(
                'public',
                'set' . ucfirst($name),
                $this->buildParametersString(
                    array($name => $typeHint),
                    true,
                    // If the type of a member is nullable we should allow passing null to the setter. If the type
                    // of the member is a class and not a primitive this is only possible if setter parameter has
                    // a default null value. We can detect whether the type is a class by checking the type hint.
                    $member->getNullable() && !empty($typeHint)
                ),
                $setterCode,
                $setterComment
            );
            $accessors[] = $setter;
        }

        foreach ($accessors as $accessor) {
            $this->class->addFunction($accessor);
        }
    }
}
