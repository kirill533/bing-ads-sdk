<?php

namespace PMG\BingAds\AdInsight;

class Opportunity
{

    /**
     * @var string $OpportunityKey
     */
    protected $OpportunityKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOpportunityKey()
    {
        return $this->OpportunityKey;
    }

    /**
     * @param string $OpportunityKey
     * @return \PMG\BingAds\AdInsight\Opportunity
     */
    public function setOpportunityKey($OpportunityKey)
    {
        $this->OpportunityKey = $OpportunityKey;
        return $this;
    }

}
