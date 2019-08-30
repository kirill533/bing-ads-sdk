<?php

namespace PMG\BingAds\AdInsight;

class DayMonthAndYear
{

    /**
     * @var int $Day
     */
    protected $Day = null;

    /**
     * @var int $Month
     */
    protected $Month = null;

    /**
     * @var int $Year
     */
    protected $Year = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param int $Day
     * @return \PMG\BingAds\AdInsight\DayMonthAndYear
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * @param int $Month
     * @return \PMG\BingAds\AdInsight\DayMonthAndYear
     */
    public function setMonth($Month)
    {
        $this->Month = $Month;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * @param int $Year
     * @return \PMG\BingAds\AdInsight\DayMonthAndYear
     */
    public function setYear($Year)
    {
        $this->Year = $Year;
        return $this;
    }

}
