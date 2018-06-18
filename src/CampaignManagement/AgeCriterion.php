<?php

namespace PMG\BingAds\CampaignMangagement;

class AgeCriterion extends Criterion
{

    /**
     * @var AgeRange $AgeRange
     */
    protected $AgeRange = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AgeRange
     */
    public function getAgeRange()
    {
      return $this->AgeRange;
    }

    /**
     * @param AgeRange $AgeRange
     * @return \PMG\BingAds\CampaignMangagement\AgeCriterion
     */
    public function setAgeRange($AgeRange)
    {
      $this->AgeRange = $AgeRange;
      return $this;
    }

}
