<?php

namespace PMG\BingAds\CampaignManagement;

class Experiment
{

    /**
     * @var int $BaseCampaignId
     */
    protected $BaseCampaignId = null;

    /**
     * @var Date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $ExperimentCampaignId
     */
    protected $ExperimentCampaignId = null;

    /**
     * @var string $ExperimentStatus
     */
    protected $ExperimentStatus = null;

    /**
     * @var string $ExperimentType
     */
    protected $ExperimentType = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var Date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var int $TrafficSplitPercent
     */
    protected $TrafficSplitPercent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
        return $this->BaseCampaignId;
    }

    /**
     * @param int $BaseCampaignId
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setBaseCampaignId($BaseCampaignId)
    {
        $this->BaseCampaignId = $BaseCampaignId;
        return $this;
    }

    /**
     * @return Date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param Date $EndDate
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getExperimentCampaignId()
    {
        return $this->ExperimentCampaignId;
    }

    /**
     * @param int $ExperimentCampaignId
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setExperimentCampaignId($ExperimentCampaignId)
    {
        $this->ExperimentCampaignId = $ExperimentCampaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExperimentStatus()
    {
        return $this->ExperimentStatus;
    }

    /**
     * @param string $ExperimentStatus
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setExperimentStatus($ExperimentStatus)
    {
        $this->ExperimentStatus = $ExperimentStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getExperimentType()
    {
        return $this->ExperimentType;
    }

    /**
     * @param string $ExperimentType
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setExperimentType($ExperimentType)
    {
        $this->ExperimentType = $ExperimentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return Date
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param Date $StartDate
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrafficSplitPercent()
    {
        return $this->TrafficSplitPercent;
    }

    /**
     * @param int $TrafficSplitPercent
     * @return \PMG\BingAds\CampaignManagement\Experiment
     */
    public function setTrafficSplitPercent($TrafficSplitPercent)
    {
        $this->TrafficSplitPercent = $TrafficSplitPercent;
        return $this;
    }

}
