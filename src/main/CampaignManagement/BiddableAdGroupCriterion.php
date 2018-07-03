<?php

namespace PMG\BingAds\CampaignManagement;

class BiddableAdGroupCriterion extends AdGroupCriterion
{

    /**
     * @var CriterionBid $CriterionBid
     */
    protected $CriterionBid = null;

    /**
     * @var string $DestinationUrl
     */
    protected $DestinationUrl = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdGroupCriterionEditorialStatus for valid values
     *
     * @var string $EditorialStatus
     */
    protected $EditorialStatus = null;

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
     * @return CriterionBid
     */
    public function getCriterionBid()
    {
      return $this->CriterionBid;
    }

    /**
     * @param CriterionBid $CriterionBid
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
     */
    public function setCriterionBid($CriterionBid)
    {
      $this->CriterionBid = $CriterionBid;
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
     */
    public function setDestinationUrl($DestinationUrl)
    {
      $this->DestinationUrl = $DestinationUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param string $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
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
     * @return \PMG\BingAds\CampaignManagement\BiddableAdGroupCriterion
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
