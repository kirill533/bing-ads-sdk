<?php

namespace PMG\BingAds\Reporting;

class ConversionPerformanceReportFilter
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
     * @var DeviceTypeReportFilter $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var KeywordStatusReportFilter $KeywordStatus
     */
    protected $KeywordStatus = null;

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
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
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
      $this->KeywordStatus = $KeywordStatus;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfstring $Keywords
     * @return \PMG\BingAds\Reporting\ConversionPerformanceReportFilter
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

}
