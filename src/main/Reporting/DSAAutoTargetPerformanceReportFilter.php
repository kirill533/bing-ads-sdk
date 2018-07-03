<?php

namespace PMG\BingAds\Reporting;

class DSAAutoTargetPerformanceReportFilter
{

    /**
     * @see \PMG\BingAds\Reporting\AccountStatusReportFilter for valid values
     *
     * @var list $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdGroupStatusReportFilter for valid values
     *
     * @var list $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\BidStrategyTypeReportFilter for valid values
     *
     * @var list $BidStrategyType
     */
    protected $BidStrategyType = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\DynamicAdTargetStatusReportFilter for valid values
     *
     * @var list $DynamicAdTargetStatus
     */
    protected $DynamicAdTargetStatus = null;

    /**
     * @var ArrayOfstring $LanguageCode
     */
    protected $LanguageCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return list
     */
    public function getAccountStatus()
    {
      return $this->AccountStatus;
    }

    /**
     * @param list $AccountStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdGroupStatus()
    {
      return $this->AdGroupStatus;
    }

    /**
     * @param list $AdGroupStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getBidStrategyType()
    {
      return $this->BidStrategyType;
    }

    /**
     * @param list $BidStrategyType
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setBidStrategyType($BidStrategyType)
    {
      $this->BidStrategyType = $BidStrategyType;
      return $this;
    }

    /**
     * @return list
     */
    public function getCampaignStatus()
    {
      return $this->CampaignStatus;
    }

    /**
     * @param list $CampaignStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getDynamicAdTargetStatus()
    {
      return $this->DynamicAdTargetStatus;
    }

    /**
     * @param list $DynamicAdTargetStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setDynamicAdTargetStatus($DynamicAdTargetStatus)
    {
      $this->DynamicAdTargetStatus = $DynamicAdTargetStatus;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param ArrayOfstring $LanguageCode
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
