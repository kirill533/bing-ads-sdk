<?php

namespace PMG\BingAds\CampaignManagement;

class FlyerAdExtension extends AdExtension
{

    /**
     * @var string $Description
     */
    protected $Description = null;

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
     * @var string $FlyerName
     */
    protected $FlyerName = null;

    /**
     * @var ArrayOflong $ImageMediaIds
     */
    protected $ImageMediaIds = null;

    /**
     * @var ArrayOfstring $ImageMediaUrls
     */
    protected $ImageMediaUrls = null;

    /**
     * @var int $StoreId
     */
    protected $StoreId = null;

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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setFinalUrls($FinalUrls)
    {
        $this->FinalUrls = $FinalUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlyerName()
    {
        return $this->FlyerName;
    }

    /**
     * @param string $FlyerName
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setFlyerName($FlyerName)
    {
        $this->FlyerName = $FlyerName;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getImageMediaIds()
    {
        return $this->ImageMediaIds;
    }

    /**
     * @param ArrayOflong $ImageMediaIds
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setImageMediaIds($ImageMediaIds)
    {
        $this->ImageMediaIds = $ImageMediaIds;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getImageMediaUrls()
    {
        return $this->ImageMediaUrls;
    }

    /**
     * @param ArrayOfstring $ImageMediaUrls
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setImageMediaUrls($ImageMediaUrls)
    {
        $this->ImageMediaUrls = $ImageMediaUrls;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param int $StoreId
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\FlyerAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

}
