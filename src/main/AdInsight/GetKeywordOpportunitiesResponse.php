<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordOpportunitiesResponse
{

    /**
     * @var ArrayOfKeywordOpportunity $Opportunities
     */
    protected $Opportunities = null;

    /**
     * @param ArrayOfKeywordOpportunity $Opportunities
     */
    public function __construct($Opportunities = null)
    {
    $this->Opportunities = $Opportunities;
    }

    /**
     * @return ArrayOfKeywordOpportunity
     */
    public function getOpportunities()
    {
        return $this->Opportunities;
    }

    /**
     * @param ArrayOfKeywordOpportunity $Opportunities
     * @return \PMG\BingAds\AdInsight\GetKeywordOpportunitiesResponse
     */
    public function setOpportunities($Opportunities)
    {
        $this->Opportunities = $Opportunities;
        return $this;
    }

}
