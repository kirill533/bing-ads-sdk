<?php

namespace PMG\BingAds\Reporting;

class ProductDimensionPerformanceReportFilter
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
     * @var AdStatusReportFilter $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DeviceTypeReportFilter $DeviceType
     */
    protected $DeviceType = null;

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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
        return $this;
    }

    /**
     * @return AdStatusReportFilter
     */
    public function getAdStatus()
    {
        return $this->AdStatus;
    }

    /**
     * @param AdStatusReportFilter $AdStatus
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
        $this->AdStatus = $AdStatus;
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

}
