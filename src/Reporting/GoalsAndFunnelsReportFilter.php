<?php

namespace PMG\BingAds\Reporting;

class GoalsAndFunnelsReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DeviceOSReportFilter $DeviceOS
     */
    protected $DeviceOS = null;

    /**
     * @var DeviceTypeReportFilter $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var ArrayOflong $GoalIds
     */
    protected $GoalIds = null;

    /**
     * @var KeywordStatusReportFilter $KeywordStatus
     */
    protected $KeywordStatus = null;

    
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
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return AdDistributionReportFilter
     */
    public function getAdDistribution()
    {
      return $this->AdDistribution;
    }

    /**
     * @param AdDistributionReportFilter $AdDistribution
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
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
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
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
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return DeviceOSReportFilter
     */
    public function getDeviceOS()
    {
      return $this->DeviceOS;
    }

    /**
     * @param DeviceOSReportFilter $DeviceOS
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setDeviceOS($DeviceOS)
    {
      $this->DeviceOS = $DeviceOS;
      return $this;
    }

    /**
     * @return DeviceTypeReportFilter
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param DeviceTypeReportFilter $DeviceType
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getGoalIds()
    {
      return $this->GoalIds;
    }

    /**
     * @param ArrayOflong $GoalIds
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setGoalIds($GoalIds)
    {
      $this->GoalIds = $GoalIds;
      return $this;
    }

    /**
     * @return KeywordStatusReportFilter
     */
    public function getKeywordStatus()
    {
      return $this->KeywordStatus;
    }

    /**
     * @param KeywordStatusReportFilter $KeywordStatus
     * @return \PMG\BingAds\Reporting\GoalsAndFunnelsReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
      $this->KeywordStatus = $KeywordStatus;
      return $this;
    }

}
