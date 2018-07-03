<?php

namespace PMG\BingAds\CampaignManagement;

class StringRuleItem extends RuleItem
{

    /**
     * @var string $Operand
     */
    protected $Operand = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\StringOperator for valid values
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
     * @return \PMG\BingAds\CampaignManagement\StringRuleItem
     */
    public function setOperand($Operand)
    {
      $this->Operand = $Operand;
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
     * @return \PMG\BingAds\CampaignManagement\StringRuleItem
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
     * @return \PMG\BingAds\CampaignManagement\StringRuleItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
