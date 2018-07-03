<?php

namespace PMG\BingAds\CustomerManagement;

class Predicate
{

    /**
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\PredicateOperator for valid values
     *
     * @var string $Operator
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
     * @return \PMG\BingAds\CustomerManagement\Predicate
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->Operator;
    }

    /**
     * @param string $Operator
     * @return \PMG\BingAds\CustomerManagement\Predicate
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
     * @return \PMG\BingAds\CustomerManagement\Predicate
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
