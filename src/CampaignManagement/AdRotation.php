<?php

namespace PMG\BingAds\CampaignMangagement;

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
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \PMG\BingAds\CampaignMangagement\AdRotation
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \PMG\BingAds\CampaignMangagement\AdRotation
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
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
     * @return \PMG\BingAds\CampaignMangagement\AdRotation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
