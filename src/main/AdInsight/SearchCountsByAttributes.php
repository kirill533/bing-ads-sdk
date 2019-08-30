<?php

namespace PMG\BingAds\AdInsight;

class SearchCountsByAttributes
{

    /**
     * @var string $Device
     */
    protected $Device = null;

    /**
     * @var ArrayOfHistoricalSearchCountPeriodic $HistoricalSearchCounts
     */
    protected $HistoricalSearchCounts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param string $Device
     * @return \PMG\BingAds\AdInsight\SearchCountsByAttributes
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return ArrayOfHistoricalSearchCountPeriodic
     */
    public function getHistoricalSearchCounts()
    {
        return $this->HistoricalSearchCounts;
    }

    /**
     * @param ArrayOfHistoricalSearchCountPeriodic $HistoricalSearchCounts
     * @return \PMG\BingAds\AdInsight\SearchCountsByAttributes
     */
    public function setHistoricalSearchCounts($HistoricalSearchCounts)
    {
        $this->HistoricalSearchCounts = $HistoricalSearchCounts;
        return $this;
    }

}
