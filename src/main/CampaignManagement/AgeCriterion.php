<?php

namespace PMG\BingAds\CampaignManagement;

class AgeCriterion extends Criterion
{

    /**
     * @see \PMG\BingAds\CampaignManagement\AgeRange for valid values
     *
     * @var string $AgeRange
     */
    protected $AgeRange = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAgeRange()
    {
      return $this->AgeRange;
    }

    /**
     * @param string $AgeRange
     * @return \PMG\BingAds\CampaignManagement\AgeCriterion
     */
    public function setAgeRange($AgeRange)
    {
      $this->AgeRange = $AgeRange;
      return $this;
    }

}
