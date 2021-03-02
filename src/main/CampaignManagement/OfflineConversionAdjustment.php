<?php

namespace PMG\BingAds\CampaignManagement;

class OfflineConversionAdjustment
{

    /**
     * @var string $AdjustmentCurrencyCode
     */
    protected $AdjustmentCurrencyCode = null;

    /**
     * @var \DateTime $AdjustmentTime
     */
    protected $AdjustmentTime = null;

    /**
     * @var string $AdjustmentType
     */
    protected $AdjustmentType = null;

    /**
     * @var float $AdjustmentValue
     */
    protected $AdjustmentValue = null;

    /**
     * @var string $ConversionName
     */
    protected $ConversionName = null;

    /**
     * @var \DateTime $ConversionTime
     */
    protected $ConversionTime = null;

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
    public function getAdjustmentCurrencyCode()
    {
        return $this->AdjustmentCurrencyCode;
    }

    /**
     * @param string $AdjustmentCurrencyCode
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setAdjustmentCurrencyCode($AdjustmentCurrencyCode)
    {
        $this->AdjustmentCurrencyCode = $AdjustmentCurrencyCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAdjustmentTime()
    {
        if (null === $this->AdjustmentTime) {
            return $this->AdjustmentTime;
        }
        try {
            return new \DateTime($this->AdjustmentTime);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $AdjustmentTime
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setAdjustmentTime(\DateTime $AdjustmentTime = null)
    {
        $this->AdjustmentTime = null === $AdjustmentTime ? null : $AdjustmentTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }

    /**
     * @param string $AdjustmentType
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setAdjustmentType($AdjustmentType)
    {
        $this->AdjustmentType = $AdjustmentType;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentValue()
    {
        return $this->AdjustmentValue;
    }

    /**
     * @param float $AdjustmentValue
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setAdjustmentValue($AdjustmentValue)
    {
        $this->AdjustmentValue = $AdjustmentValue;
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
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
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
        if (null === $this->ConversionTime) {
            return $this->ConversionTime;
        }
        try {
            return new \DateTime($this->ConversionTime);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $ConversionTime
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setConversionTime(\DateTime $ConversionTime = null)
    {
        $this->ConversionTime = null === $ConversionTime ? null : $ConversionTime->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionAdjustment
     */
    public function setMicrosoftClickId($MicrosoftClickId)
    {
        $this->MicrosoftClickId = $MicrosoftClickId;
        return $this;
    }

}
