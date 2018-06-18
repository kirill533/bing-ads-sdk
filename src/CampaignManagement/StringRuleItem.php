<?php

namespace PMG\BingAds\CampaignMangagement;

class StringRuleItem extends RuleItem
{

    /**
     * @var string $Operand
     */
    protected $Operand = null;

    /**
     * @var StringOperator $Operator
     */
    protected $Operator = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getOperand()
    {
      return $this->Operand;
    }

    /**
     * @param string $Operand
     * @return \PMG\BingAds\CampaignMangagement\StringRuleItem
     */
    public function setOperand($Operand)
    {
      $this->Operand = $Operand;
      return $this;
    }

    /**
     * @return StringOperator
     */
    public function getOperator()
    {
      return $this->Operator;
    }

    /**
     * @param StringOperator $Operator
     * @return \PMG\BingAds\CampaignMangagement\StringRuleItem
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
     * @return \PMG\BingAds\CampaignMangagement\StringRuleItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
