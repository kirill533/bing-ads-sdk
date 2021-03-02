<?php

namespace PMG\BingAds\CampaignManagement;

class CombinedList extends Audience
{

    /**
     * @var ArrayOfCombinationRule $CombinationRules
     */
    protected $CombinationRules = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfCombinationRule
     */
    public function getCombinationRules()
    {
        return $this->CombinationRules;
    }

    /**
     * @param ArrayOfCombinationRule $CombinationRules
     * @return \PMG\BingAds\CampaignManagement\CombinedList
     */
    public function setCombinationRules($CombinationRules)
    {
        $this->CombinationRules = $CombinationRules;
        return $this;
    }

}
