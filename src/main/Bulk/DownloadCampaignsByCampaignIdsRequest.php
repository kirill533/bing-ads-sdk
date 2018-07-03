<?php

namespace PMG\BingAds\Bulk;

class DownloadCampaignsByCampaignIdsRequest
{

    /**
     * @var ArrayOfCampaignScope $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @see \PMG\BingAds\Bulk\CompressionType for valid values
     *
     * @var string $CompressionType
     */
    protected $CompressionType = null;

    /**
     * @see \PMG\BingAds\Bulk\DataScope for valid values
     *
     * @var list $DataScope
     */
    protected $DataScope = null;

    /**
     * @var ArrayOfDownloadEntity $DownloadEntities
     */
    protected $DownloadEntities = null;

    /**
     * @see \PMG\BingAds\Bulk\DownloadFileType for valid values
     *
     * @var string $DownloadFileType
     */
    protected $DownloadFileType = null;

    /**
     * @var string $FormatVersion
     */
    protected $FormatVersion = null;

    /**
     * @var \DateTime $LastSyncTimeInUTC
     */
    protected $LastSyncTimeInUTC = null;

    /**
     * @var PerformanceStatsDateRange $PerformanceStatsDateRange
     */
    protected $PerformanceStatsDateRange = null;

    /**
     * @param ArrayOfCampaignScope $Campaigns
     * @param string $CompressionType
     * @param list $DataScope
     * @param ArrayOfDownloadEntity $DownloadEntities
     * @param string $DownloadFileType
     * @param string $FormatVersion
     * @param \DateTime $LastSyncTimeInUTC
     * @param PerformanceStatsDateRange $PerformanceStatsDateRange
     */
    public function __construct($Campaigns = null, $CompressionType = null, $DataScope = null, $DownloadEntities = null, $DownloadFileType = null, $FormatVersion = null, \DateTime $LastSyncTimeInUTC = null, $PerformanceStatsDateRange = null)
    {
      $this->Campaigns = $Campaigns;
      $this->CompressionType = $CompressionType;
      $this->DataScope = $DataScope;
      $this->DownloadEntities = $DownloadEntities;
      $this->DownloadFileType = $DownloadFileType;
      $this->FormatVersion = $FormatVersion;
      $this->LastSyncTimeInUTC = $LastSyncTimeInUTC ? $LastSyncTimeInUTC->format(\DateTime::ATOM) : null;
      $this->PerformanceStatsDateRange = $PerformanceStatsDateRange;
    }

    /**
     * @return ArrayOfCampaignScope
     */
    public function getCampaigns()
    {
      return $this->Campaigns;
    }

    /**
     * @param ArrayOfCampaignScope $Campaigns
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompressionType()
    {
      return $this->CompressionType;
    }

    /**
     * @param string $CompressionType
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setCompressionType($CompressionType)
    {
      $this->CompressionType = $CompressionType;
      return $this;
    }

    /**
     * @return list
     */
    public function getDataScope()
    {
      return $this->DataScope;
    }

    /**
     * @param list $DataScope
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setDataScope($DataScope)
    {
      $this->DataScope = $DataScope;
      return $this;
    }

    /**
     * @return ArrayOfDownloadEntity
     */
    public function getDownloadEntities()
    {
      return $this->DownloadEntities;
    }

    /**
     * @param ArrayOfDownloadEntity $DownloadEntities
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setDownloadEntities($DownloadEntities)
    {
      $this->DownloadEntities = $DownloadEntities;
      return $this;
    }

    /**
     * @return string
     */
    public function getDownloadFileType()
    {
      return $this->DownloadFileType;
    }

    /**
     * @param string $DownloadFileType
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setDownloadFileType($DownloadFileType)
    {
      $this->DownloadFileType = $DownloadFileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatVersion()
    {
      return $this->FormatVersion;
    }

    /**
     * @param string $FormatVersion
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setFormatVersion($FormatVersion)
    {
      $this->FormatVersion = $FormatVersion;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSyncTimeInUTC()
    {
      if ($this->LastSyncTimeInUTC == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSyncTimeInUTC);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSyncTimeInUTC
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setLastSyncTimeInUTC(\DateTime $LastSyncTimeInUTC)
    {
      $this->LastSyncTimeInUTC = $LastSyncTimeInUTC->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return PerformanceStatsDateRange
     */
    public function getPerformanceStatsDateRange()
    {
      return $this->PerformanceStatsDateRange;
    }

    /**
     * @param PerformanceStatsDateRange $PerformanceStatsDateRange
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest
     */
    public function setPerformanceStatsDateRange($PerformanceStatsDateRange)
    {
      $this->PerformanceStatsDateRange = $PerformanceStatsDateRange;
      return $this;
    }

}
