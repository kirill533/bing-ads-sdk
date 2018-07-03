<?php

namespace PMG\BingAds\Bulk;

class DownloadCampaignsByAccountIdsRequest
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var CompressionType $CompressionType
     */
    protected $CompressionType = null;

    /**
     * @var DataScope $DataScope
     */
    protected $DataScope = null;

    /**
     * @var ArrayOfDownloadEntity $DownloadEntities
     */
    protected $DownloadEntities = null;

    /**
     * @var DownloadFileType $DownloadFileType
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
     * @param ArrayOflong $AccountIds
     * @param CompressionType $CompressionType
     * @param DataScope $DataScope
     * @param ArrayOfDownloadEntity $DownloadEntities
     * @param DownloadFileType $DownloadFileType
     * @param string $FormatVersion
     * @param \DateTime $LastSyncTimeInUTC
     * @param PerformanceStatsDateRange $PerformanceStatsDateRange
     */
    public function __construct($AccountIds = null, $CompressionType = null, $DataScope = null, $DownloadEntities = null, $DownloadFileType = null, $FormatVersion = null, \DateTime $LastSyncTimeInUTC = null, $PerformanceStatsDateRange = null)
    {
      $this->AccountIds = $AccountIds;
      $this->CompressionType = $CompressionType;
      $this->DataScope = $DataScope;
      $this->DownloadEntities = $DownloadEntities;
      $this->DownloadFileType = $DownloadFileType;
      $this->FormatVersion = $FormatVersion;
      $this->LastSyncTimeInUTC = $LastSyncTimeInUTC ? $LastSyncTimeInUTC->format(\DateTime::ATOM) : null;
      $this->PerformanceStatsDateRange = $PerformanceStatsDateRange;
    }

    /**
     * @return ArrayOflong
     */
    public function getAccountIds()
    {
      return $this->AccountIds;
    }

    /**
     * @param ArrayOflong $AccountIds
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
     */
    public function setAccountIds($AccountIds)
    {
      $this->AccountIds = $AccountIds;
      return $this;
    }

    /**
     * @return CompressionType
     */
    public function getCompressionType()
    {
      return $this->CompressionType;
    }

    /**
     * @param CompressionType $CompressionType
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
     */
    public function setCompressionType($CompressionType)
    {
      $this->CompressionType = $CompressionType;
      return $this;
    }

    /**
     * @return DataScope
     */
    public function getDataScope()
    {
      return $this->DataScope;
    }

    /**
     * @param DataScope $DataScope
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
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
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
     */
    public function setDownloadEntities($DownloadEntities)
    {
      $this->DownloadEntities = $DownloadEntities;
      return $this;
    }

    /**
     * @return DownloadFileType
     */
    public function getDownloadFileType()
    {
      return $this->DownloadFileType;
    }

    /**
     * @param DownloadFileType $DownloadFileType
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
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
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
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
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
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
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest
     */
    public function setPerformanceStatsDateRange($PerformanceStatsDateRange)
    {
      $this->PerformanceStatsDateRange = $PerformanceStatsDateRange;
      return $this;
    }

}
