<?php

namespace PMG\BingAds\CampaignManagement;

class AppAdExtension extends AdExtension
{

    /**
     * @var string $AppPlatform
     */
    protected $AppPlatform = null;

    /**
     * @var string $AppStoreId
     */
    protected $AppStoreId = null;

    /**
     * @var string $DestinationUrl
     */
    protected $DestinationUrl = null;

    /**
     * @var string $DisplayText
     */
    protected $DisplayText = null;

    /**
     * @var ArrayOfAppUrl $FinalAppUrls
     */
    protected $FinalAppUrls = null;

    /**
     * @var ArrayOfstring $FinalMobileUrls
     */
    protected $FinalMobileUrls = null;

    /**
     * @var ArrayOfstring $FinalUrls
     */
    protected $FinalUrls = null;

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
    public function getAppPlatform()
    {
      return $this->AppPlatform;
    }

    /**
     * @param string $AppPlatform
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setAppPlatform($AppPlatform)
    {
      $this->AppPlatform = $AppPlatform;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppStoreId()
    {
      return $this->AppStoreId;
    }

    /**
     * @param string $AppStoreId
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setAppStoreId($AppStoreId)
    {
      $this->AppStoreId = $AppStoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->DestinationUrl;
    }

    /**
     * @param string $DestinationUrl
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setDestinationUrl($DestinationUrl)
    {
      $this->DestinationUrl = $DestinationUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayText()
    {
      return $this->DisplayText;
    }

    /**
     * @param string $DisplayText
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setDisplayText($DisplayText)
    {
      $this->DisplayText = $DisplayText;
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
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
      $this->FinalMobileUrls = $FinalMobileUrls;
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
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setFinalUrls($FinalUrls)
    {
      $this->FinalUrls = $FinalUrls;
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
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\AppAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
