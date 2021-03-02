<?php

namespace PMG\BingAds\CampaignManagement;

class FilterLinkAdExtension extends AdExtension
{

    /**
     * @var AdExtensionHeaderType $AdExtensionHeaderType
     */
    protected $AdExtensionHeaderType = null;

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
     * @var ArrayOfstring $Texts
     */
    protected $Texts = null;

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
     * @return AdExtensionHeaderType
     */
    public function getAdExtensionHeaderType()
    {
        return $this->AdExtensionHeaderType;
    }

    /**
     * @param AdExtensionHeaderType $AdExtensionHeaderType
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
     */
    public function setAdExtensionHeaderType($AdExtensionHeaderType)
    {
        $this->AdExtensionHeaderType = $AdExtensionHeaderType;
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTexts()
    {
        return $this->Texts;
    }

    /**
     * @param ArrayOfstring $Texts
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
     */
    public function setTexts($Texts)
    {
        $this->Texts = $Texts;
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FilterLinkAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

}
