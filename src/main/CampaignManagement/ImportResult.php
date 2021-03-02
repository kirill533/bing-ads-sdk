<?php

namespace PMG\BingAds\CampaignManagement;

class ImportResult
{

    /**
     * @var ArrayOfImportEntityStatistics $EntityStatistics
     */
    protected $EntityStatistics = null;

    /**
     * @var string $ErrorLogUrl
     */
    protected $ErrorLogUrl = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var ImportJob $ImportJob
     */
    protected $ImportJob = null;

    /**
     * @var \DateTime $StartTimeInUTC
     */
    protected $StartTimeInUTC = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfImportEntityStatistics
     */
    public function getEntityStatistics()
    {
        return $this->EntityStatistics;
    }

    /**
     * @param ArrayOfImportEntityStatistics $EntityStatistics
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setEntityStatistics($EntityStatistics)
    {
        $this->EntityStatistics = $EntityStatistics;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorLogUrl()
    {
        return $this->ErrorLogUrl;
    }

    /**
     * @param string $ErrorLogUrl
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setErrorLogUrl($ErrorLogUrl)
    {
        $this->ErrorLogUrl = $ErrorLogUrl;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
        return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return ImportJob
     */
    public function getImportJob()
    {
        return $this->ImportJob;
    }

    /**
     * @param ImportJob $ImportJob
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setImportJob($ImportJob)
    {
        $this->ImportJob = $ImportJob;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeInUTC()
    {
        if (null === $this->StartTimeInUTC) {
            return $this->StartTimeInUTC;
        }
        try {
            return new \DateTime($this->StartTimeInUTC);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $StartTimeInUTC
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setStartTimeInUTC(\DateTime $StartTimeInUTC = null)
    {
        $this->StartTimeInUTC = null === $StartTimeInUTC ? null : $StartTimeInUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CampaignManagement\ImportResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

}
