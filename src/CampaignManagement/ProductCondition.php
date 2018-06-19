<?php

namespace PMG\BingAds\CampaignManagement;

class ProductCondition
{

    /**
     * @var string $Attribute
     */
    protected $Attribute = null;

    /**
     * @var string $Operand
     */
    protected $Operand = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
      return $this->Attribute;
    }

    /**
     * @param string $Attribute
     * @return \PMG\BingAds\CampaignManagement\ProductCondition
     */
    public function setAttribute($Attribute)
    {
      $this->Attribute = $Attribute;
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
     * @return \PMG\BingAds\CampaignManagement\ProductCondition
     */
    public function setOperand($Operand)
    {
      $this->Operand = $Operand;
      return $this;
    }

}
