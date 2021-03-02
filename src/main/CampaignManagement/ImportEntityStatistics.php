<?php

namespace PMG\BingAds\CampaignManagement;

class ImportEntityStatistics
{

    /**
     * @var int $Additions
     */
    protected $Additions = null;

    /**
     * @var int $Changes
     */
    protected $Changes = null;

    /**
     * @var int $Deletions
     */
    protected $Deletions = null;

    /**
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var int $Errors
     */
    protected $Errors = null;

    /**
     * @var int $Total
     */
    protected $Total = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAdditions()
    {
        return $this->Additions;
    }

    /**
     * @param int $Additions
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setAdditions($Additions)
    {
        $this->Additions = $Additions;
        return $this;
    }

    /**
     * @return int
     */
    public function getChanges()
    {
        return $this->Changes;
    }

    /**
     * @param int $Changes
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setChanges($Changes)
    {
        $this->Changes = $Changes;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeletions()
    {
        return $this->Deletions;
    }

    /**
     * @param int $Deletions
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setDeletions($Deletions)
    {
        $this->Deletions = $Deletions;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setEntityType($EntityType)
    {
        $this->EntityType = $EntityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param int $Errors
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setErrors($Errors)
    {
        $this->Errors = $Errors;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param int $Total
     * @return \PMG\BingAds\CampaignManagement\ImportEntityStatistics
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
        return $this;
    }

}
