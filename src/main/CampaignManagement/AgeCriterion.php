<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @return \PMG\BingAds\CampaignManagement\AgeCriterion
     */
    public function setAgeRange($AgeRange)
    {
        $this->AgeRange = $AgeRange;
        return $this;
    }

}
