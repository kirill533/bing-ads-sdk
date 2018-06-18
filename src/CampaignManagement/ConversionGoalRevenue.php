<?php

namespace PMG\BingAds\CampaignMangagement;

class ConversionGoalRevenue
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var ConversionGoalRevenueType $Type
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
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoalRevenue
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return ConversionGoalRevenueType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ConversionGoalRevenueType $Type
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoalRevenue
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
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoalRevenue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
