<?php

namespace PMG\BingAds\CampaignManagement;

class ConversionGoalRevenue
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalRevenueType for valid values
     *
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \PMG\BingAds\CampaignManagement\ConversionGoalRevenue
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\ConversionGoalRevenue
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \PMG\BingAds\CampaignManagement\ConversionGoalRevenue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
