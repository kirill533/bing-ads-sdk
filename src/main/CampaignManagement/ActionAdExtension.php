<?php

namespace PMG\BingAds\CampaignManagement;

class ActionAdExtension extends AdExtension
{

    /**
     * @var ActionAdExtensionActionType $ActionType
     */
    protected $ActionType = null;

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
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    /**
     * @param ActionAdExtensionActionType $ActionType
     */
    public function __construct($ActionType = null)
    {
        parent::__construct();
    $this->ActionType = $ActionType;
    }

    /**
     * @return ActionAdExtensionActionType
     */
    public function getActionType()
    {
        return $this->ActionType;
    }

    /**
     * @param ActionAdExtensionActionType $ActionType
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
     */
    public function setActionType($ActionType)
    {
        $this->ActionType = $ActionType;
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\ActionAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

}
