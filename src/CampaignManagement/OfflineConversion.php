<?php

namespace PMG\BingAds\CampaignMangagement;

class OfflineConversion
{

    /**
     * @var string $ConversionCurrencyCode
     */
    protected $ConversionCurrencyCode = null;

    /**
     * @var string $ConversionName
     */
    protected $ConversionName = null;

    /**
     * @var \DateTime $ConversionTime
     */
    protected $ConversionTime = null;

    /**
     * @var float $ConversionValue
     */
    protected $ConversionValue = null;

    /**
     * @var string $MicrosoftClickId
     */
    protected $MicrosoftClickId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getConversionCurrencyCode()
    {
      return $this->ConversionCurrencyCode;
    }

    /**
     * @param string $ConversionCurrencyCode
     * @return \PMG\BingAds\CampaignMangagement\OfflineConversion
     */
    public function setConversionCurrencyCode($ConversionCurrencyCode)
    {
      $this->ConversionCurrencyCode = $ConversionCurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionName()
    {
      return $this->ConversionName;
    }

    /**
     * @param string $ConversionName
     * @return \PMG\BingAds\CampaignMangagement\OfflineConversion
     */
    public function setConversionName($ConversionName)
    {
      $this->ConversionName = $ConversionName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConversionTime()
    {
      if ($this->ConversionTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ConversionTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ConversionTime
     * @return \PMG\BingAds\CampaignMangagement\OfflineConversion
     */
    public function setConversionTime(\DateTime $ConversionTime = null)
    {
      if ($ConversionTime == null) {
       $this->ConversionTime = null;
      } else {
        $this->ConversionTime = $ConversionTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionValue()
    {
      return $this->ConversionValue;
    }

    /**
     * @param float $ConversionValue
     * @return \PMG\BingAds\CampaignMangagement\OfflineConversion
     */
    public function setConversionValue($ConversionValue)
    {
      $this->ConversionValue = $ConversionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getMicrosoftClickId()
    {
      return $this->MicrosoftClickId;
    }

    /**
     * @param string $MicrosoftClickId
     * @return \PMG\BingAds\CampaignMangagement\OfflineConversion
     */
    public function setMicrosoftClickId($MicrosoftClickId)
    {
      $this->MicrosoftClickId = $MicrosoftClickId;
      return $this;
    }

}