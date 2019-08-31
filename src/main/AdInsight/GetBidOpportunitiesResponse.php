<?php

namespace PMG\BingAds\AdInsight;

class GetBidOpportunitiesResponse
{

    /**
     * @var ArrayOfBidOpportunity $Opportunities
     */
    protected $Opportunities = null;

    /**
     * @param ArrayOfBidOpportunity $Opportunities
     */
    public function __construct($Opportunities = null)
    {
    $this->Opportunities = $Opportunities;
    }

    /**
     * @return ArrayOfBidOpportunity
     */
    public function getOpportunities()
    {
        return $this->Opportunities;
    }

    /**
     * @param ArrayOfBidOpportunity $Opportunities
     * @return \PMG\BingAds\AdInsight\GetBidOpportunitiesResponse
     */
    public function setOpportunities($Opportunities)
    {
        $this->Opportunities = $Opportunities;
        return $this;
    }

}
