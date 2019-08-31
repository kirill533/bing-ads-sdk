<?php

namespace PMG\BingAds\AdInsight;

class BroadMatchSearchQueryKPI
{

    /**
     * @var float $AverageCTR
     */
    protected $AverageCTR = null;

    /**
     * @var float $Clicks
     */
    protected $Clicks = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var int $SRPV
     */
    protected $SRPV = null;

    /**
     * @var string $SearchQuery
     */
    protected $SearchQuery = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAverageCTR()
    {
        return $this->AverageCTR;
    }

    /**
     * @param float $AverageCTR
     * @return \PMG\BingAds\AdInsight\BroadMatchSearchQueryKPI
     */
    public function setAverageCTR($AverageCTR)
    {
        $this->AverageCTR = $AverageCTR;
        return $this;
    }

    /**
     * @return float
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param float $Clicks
     * @return \PMG\BingAds\AdInsight\BroadMatchSearchQueryKPI
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
        return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \PMG\BingAds\AdInsight\BroadMatchSearchQueryKPI
     */
    public function setImpressions($Impressions)
    {
        $this->Impressions = $Impressions;
        return $this;
    }

    /**
     * @return int
     */
    public function getSRPV()
    {
        return $this->SRPV;
    }

    /**
     * @param int $SRPV
     * @return \PMG\BingAds\AdInsight\BroadMatchSearchQueryKPI
     */
    public function setSRPV($SRPV)
    {
        $this->SRPV = $SRPV;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->SearchQuery;
    }

    /**
     * @param string $SearchQuery
     * @return \PMG\BingAds\AdInsight\BroadMatchSearchQueryKPI
     */
    public function setSearchQuery($SearchQuery)
    {
        $this->SearchQuery = $SearchQuery;
        return $this;
    }

}
