<?php

namespace PMG\BingAds\CampaignManagement;

class WebpageCondition
{

    /**
     * @var string $Argument
     */
    protected $Argument = null;

    /**
     * @var WebpageConditionOperand $Operand
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
     * @return WebpageConditionOperand
     */
    public function getOperand()
    {
        return $this->Operand;
    }

    /**
     * @param WebpageConditionOperand $Operand
     * @return \PMG\BingAds\CampaignManagement\WebpageCondition
     */
    public function setOperand($Operand)
    {
        $this->Operand = $Operand;
        return $this;
    }

}
