<?php

namespace PMG\BingAds\CampaignManagement;

class PriceAdExtension extends AdExtension
{

    /**
     * @var string $FinalUrlSuffix
     */
    protected $FinalUrlSuffix = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var PriceExtensionType $PriceExtensionType
     */
    protected $PriceExtensionType = null;

    /**
     * @var ArrayOfPriceTableRow $TableRows
     */
    protected $TableRows = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    /**
     * @param PriceExtensionType $PriceExtensionType
     */
    public function __construct($PriceExtensionType = null)
    {
        parent::__construct();
    $this->PriceExtensionType = $PriceExtensionType;
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setFinalUrlSuffix($FinalUrlSuffix)
    {
        $this->FinalUrlSuffix = $FinalUrlSuffix;
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return PriceExtensionType
     */
    public function getPriceExtensionType()
    {
        return $this->PriceExtensionType;
    }

    /**
     * @param PriceExtensionType $PriceExtensionType
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setPriceExtensionType($PriceExtensionType)
    {
        $this->PriceExtensionType = $PriceExtensionType;
        return $this;
    }

    /**
     * @return ArrayOfPriceTableRow
     */
    public function getTableRows()
    {
        return $this->TableRows;
    }

    /**
     * @param ArrayOfPriceTableRow $TableRows
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setTableRows($TableRows)
    {
        $this->TableRows = $TableRows;
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

}
