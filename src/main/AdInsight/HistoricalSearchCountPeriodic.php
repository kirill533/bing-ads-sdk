<?php

namespace PMG\BingAds\AdInsight;

class HistoricalSearchCountPeriodic
{

    /**
     * @var int $SearchCount
     */
    protected $SearchCount = null;

    /**
     * @var DayMonthAndYear $DayMonthAndYear
     */
    protected $DayMonthAndYear = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSearchCount()
    {
        return $this->SearchCount;
    }

    /**
     * @param int $SearchCount
     * @return \PMG\BingAds\AdInsight\HistoricalSearchCountPeriodic
     */
    public function setSearchCount($SearchCount)
    {
        $this->SearchCount = $SearchCount;
        return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getDayMonthAndYear()
    {
        return $this->DayMonthAndYear;
    }

    /**
     * @param DayMonthAndYear $DayMonthAndYear
     * @return \PMG\BingAds\AdInsight\HistoricalSearchCountPeriodic
     */
    public function setDayMonthAndYear($DayMonthAndYear)
    {
        $this->DayMonthAndYear = $DayMonthAndYear;
        return $this;
    }

}
