<?php

namespace PMG\BingAds\Reporting;

class DSAAutoTargetPerformanceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var BidStrategyTypeReportFilter $BidStrategyType
     */
    protected $BidStrategyType = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DynamicAdTargetStatusReportFilter $DynamicAdTargetStatus
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
     * @return AccountStatusReportFilter
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param AccountStatusReportFilter $AccountStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return AdGroupStatusReportFilter
     */
    public function getAdGroupStatus()
    {
        return $this->AdGroupStatus;
    }

    /**
     * @param AdGroupStatusReportFilter $AdGroupStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
        return $this;
    }

    /**
     * @return BidStrategyTypeReportFilter
     */
    public function getBidStrategyType()
    {
        return $this->BidStrategyType;
    }

    /**
     * @param BidStrategyTypeReportFilter $BidStrategyType
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setBidStrategyType($BidStrategyType)
    {
        $this->BidStrategyType = $BidStrategyType;
        return $this;
    }

    /**
     * @return CampaignStatusReportFilter
     */
    public function getCampaignStatus()
    {
        return $this->CampaignStatus;
    }

    /**
     * @param CampaignStatusReportFilter $CampaignStatus
     * @return \PMG\BingAds\Reporting\DSAAutoTargetPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
        $this->CampaignStatus = $CampaignStatus;
        return $this;
    }

    /**
     * @return DynamicAdTargetStatusReportFilter
     */
    public function getDynamicAdTargetStatus()
    {
        return $this->DynamicAdTargetStatus;
    }

    /**
     * @param DynamicAdTargetStatusReportFilter $DynamicAdTargetStatus
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
