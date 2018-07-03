<?php

namespace PMG\BingAds\CampaignManagement;

class WebpageCondition
{

    /**
     * @var string $Argument
     */
    protected $Argument = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\WebpageConditionOperand for valid values
     *
     * @var string $Operand
     */
    protected $Operand = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getArgument()
    {
      return $this->Argument;
    }

    /**
     * @param string $Argument
     * @return \PMG\BingAds\CampaignManagement\WebpageCondition
     */
    public function setArgument($Argument)
    {
      $this->Argument = $Argument;
      return $this;
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
     * @return \PMG\BingAds\CampaignManagement\WebpageCondition
     */
    public function setOperand($Operand)
    {
      $this->Operand = $Operand;
      return $this;
    }

}
