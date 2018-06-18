<?php

namespace PMG\BingAds\CampaignMangagement;

class SitelinkAdExtension extends AdExtension
{

    /**
     * @var string $Description1
     */
    protected $Description1 = null;

    /**
     * @var string $Description2
     */
    protected $Description2 = null;

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
    public function getDescription1()
    {
      return $this->Description1;
    }

    /**
     * @param string $Description1
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
     */
    public function setDescription1($Description1)
    {
      $this->Description1 = $Description1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->Description2;
    }

    /**
     * @param string $Description2
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
     */
    public function setDescription2($Description2)
    {
      $this->Description2 = $Description2;
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\SitelinkAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
