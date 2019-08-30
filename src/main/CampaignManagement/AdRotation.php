<?php

namespace PMG\BingAds\CampaignManagement;

class AdRotation
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var AdRotationType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if (null === $this->EndDate) {
            return $this->EndDate;
        }
        try {
            return new \DateTime($this->EndDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \PMG\BingAds\CampaignManagement\AdRotation
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
        $this->EndDate = null === $EndDate ? null : $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if (null === $this->StartDate) {
            return $this->StartDate;
        }
        try {
            return new \DateTime($this->StartDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \PMG\BingAds\CampaignManagement\AdRotation
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
        $this->StartDate = null === $StartDate ? null : $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return AdRotationType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param AdRotationType $Type
     * @return \PMG\BingAds\CampaignManagement\AdRotation
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
