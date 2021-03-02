<?php

namespace PMG\BingAds\CampaignManagement;

class PromotionAdExtension extends AdExtension
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var PromotionDiscountModifier $DiscountModifier
     */
    protected $DiscountModifier = null;

    /**
     * @var ArrayOfAppUrl $FinalAppUrls
     */
    protected $FinalAppUrls = null;

    /**
     * @var ArrayOfstring $FinalMobileUrls
     */
    protected $FinalMobileUrls = null;

    /**
     * @var string $FinalUrlSuffix
     */
    protected $FinalUrlSuffix = null;

    /**
     * @var ArrayOfstring $FinalUrls
     */
    protected $FinalUrls = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var float $MoneyAmountOff
     */
    protected $MoneyAmountOff = null;

    /**
     * @var float $OrdersOverAmount
     */
    protected $OrdersOverAmount = null;

    /**
     * @var float $PercentOff
     */
    protected $PercentOff = null;

    /**
     * @var string $PromotionCode
     */
    protected $PromotionCode = null;

    /**
     * @var Date $PromotionEndDate
     */
    protected $PromotionEndDate = null;

    /**
     * @var string $PromotionItem
     */
    protected $PromotionItem = null;

    /**
     * @var PromotionOccasion $PromotionOccasion
     */
    protected $PromotionOccasion = null;

    /**
     * @var Date $PromotionStartDate
     */
    protected $PromotionStartDate = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    
    public function __construct()
    {
        parent::__construct();
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
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setCurrencyCode($CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * @return PromotionDiscountModifier
     */
    public function getDiscountModifier()
    {
        return $this->DiscountModifier;
    }

    /**
     * @param PromotionDiscountModifier $DiscountModifier
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setDiscountModifier($DiscountModifier)
    {
        $this->DiscountModifier = $DiscountModifier;
        return $this;
    }

    /**
     * @return ArrayOfAppUrl
     */
    public function getFinalAppUrls()
    {
        return $this->FinalAppUrls;
    }

    /**
     * @param ArrayOfAppUrl $FinalAppUrls
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setFinalAppUrls($FinalAppUrls)
    {
        $this->FinalAppUrls = $FinalAppUrls;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalMobileUrls()
    {
        return $this->FinalMobileUrls;
    }

    /**
     * @param ArrayOfstring $FinalMobileUrls
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
        $this->FinalMobileUrls = $FinalMobileUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return $this->FinalUrlSuffix;
    }

    /**
     * @param string $FinalUrlSuffix
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setFinalUrlSuffix($FinalUrlSuffix)
    {
        $this->FinalUrlSuffix = $FinalUrlSuffix;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalUrls()
    {
        return $this->FinalUrls;
    }

    /**
     * @param ArrayOfstring $FinalUrls
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setFinalUrls($FinalUrls)
    {
        $this->FinalUrls = $FinalUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return float
     */
    public function getMoneyAmountOff()
    {
        return $this->MoneyAmountOff;
    }

    /**
     * @param float $MoneyAmountOff
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setMoneyAmountOff($MoneyAmountOff)
    {
        $this->MoneyAmountOff = $MoneyAmountOff;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrdersOverAmount()
    {
        return $this->OrdersOverAmount;
    }

    /**
     * @param float $OrdersOverAmount
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setOrdersOverAmount($OrdersOverAmount)
    {
        $this->OrdersOverAmount = $OrdersOverAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentOff()
    {
        return $this->PercentOff;
    }

    /**
     * @param float $PercentOff
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPercentOff($PercentOff)
    {
        $this->PercentOff = $PercentOff;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }

    /**
     * @param string $PromotionCode
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPromotionCode($PromotionCode)
    {
        $this->PromotionCode = $PromotionCode;
        return $this;
    }

    /**
     * @return Date
     */
    public function getPromotionEndDate()
    {
        return $this->PromotionEndDate;
    }

    /**
     * @param Date $PromotionEndDate
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPromotionEndDate($PromotionEndDate)
    {
        $this->PromotionEndDate = $PromotionEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPromotionItem()
    {
        return $this->PromotionItem;
    }

    /**
     * @param string $PromotionItem
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPromotionItem($PromotionItem)
    {
        $this->PromotionItem = $PromotionItem;
        return $this;
    }

    /**
     * @return PromotionOccasion
     */
    public function getPromotionOccasion()
    {
        return $this->PromotionOccasion;
    }

    /**
     * @param PromotionOccasion $PromotionOccasion
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPromotionOccasion($PromotionOccasion)
    {
        $this->PromotionOccasion = $PromotionOccasion;
        return $this;
    }

    /**
     * @return Date
     */
    public function getPromotionStartDate()
    {
        return $this->PromotionStartDate;
    }

    /**
     * @param Date $PromotionStartDate
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setPromotionStartDate($PromotionStartDate)
    {
        $this->PromotionStartDate = $PromotionStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return $this->TrackingUrlTemplate;
    }

    /**
     * @param string $TrackingUrlTemplate
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
        $this->TrackingUrlTemplate = $TrackingUrlTemplate;
        return $this;
    }

    /**
     * @return CustomParameters
     */
    public function getUrlCustomParameters()
    {
        return $this->UrlCustomParameters;
    }

    /**
     * @param CustomParameters $UrlCustomParameters
     * @return \PMG\BingAds\CampaignManagement\PromotionAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

}
