<?php

namespace PMG\BingAds\AdInsight;

class GetBudgetOpportunitiesResponse
{

    /**
     * @var ArrayOfBudgetOpportunity $Opportunities
     */
    protected $Opportunities = null;

    /**
     * @param ArrayOfBudgetOpportunity $Opportunities
     */
    public function __construct($Opportunities = null)
    {
    $this->Opportunities = $Opportunities;
    }

    /**
     * @return ArrayOfBudgetOpportunity
     */
    public function getOpportunities()
    {
        return $this->Opportunities;
    }

    /**
     * @param ArrayOfBudgetOpportunity $Opportunities
     * @return \PMG\BingAds\AdInsight\GetBudgetOpportunitiesResponse
     */
    public function setOpportunities($Opportunities)
    {
        $this->Opportunities = $Opportunities;
        return $this;
    }

}
