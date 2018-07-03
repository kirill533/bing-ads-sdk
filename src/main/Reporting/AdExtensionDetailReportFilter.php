<?php

namespace PMG\BingAds\Reporting;

class AdExtensionDetailReportFilter
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
     * @see \PMG\BingAds\Reporting\AdStatusReportFilter for valid values
     *
     * @var list $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\DeviceOSReportFilter for valid values
     *
     * @var list $DeviceOS
     */
    protected $DeviceOS = null;

    /**
     * @see \PMG\BingAds\Reporting\DeviceTypeReportFilter for valid values
     *
     * @var list $DeviceType
     */
    protected $DeviceType = null;

    
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
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
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
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdStatus()
    {
      return $this->AdStatus;
    }

    /**
     * @param list $AdStatus
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
     */
    public function setAdStatus($AdStatus)
    {
      $this->AdStatus = $AdStatus;
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
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeviceOS()
    {
      return $this->DeviceOS;
    }

    /**
     * @param list $DeviceOS
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
     */
    public function setDeviceOS($DeviceOS)
    {
      $this->DeviceOS = $DeviceOS;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param list $DeviceType
     * @return \PMG\BingAds\Reporting\AdExtensionDetailReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

}
