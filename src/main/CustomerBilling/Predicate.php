<?php

namespace PMG\BingAds\CustomerBilling;

class Predicate
{

    /**
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @var PredicateOperator $Operator
     */
    protected $Operator = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param string $Field
     * @return \PMG\BingAds\CustomerBilling\Predicate
     */
    public function setField($Field)
    {
        $this->Field = $Field;
        return $this;
    }

    /**
     * @return PredicateOperator
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * @param PredicateOperator $Operator
     * @return \PMG\BingAds\CustomerBilling\Predicate
     */
    public function setOperator($Operator)
    {
        $this->Operator = $Operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return \PMG\BingAds\CustomerBilling\Predicate
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

}
