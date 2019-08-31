<?php

namespace PMG\BingAds\Bulk;

class Date
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

    /**
     * @param int $Day
     * @param int $Month
     * @param int $Year
     */
    public function __construct($Day = null, $Month = null, $Year = null)
    {
    $this->Day = $Day;
    $this->Month = $Month;
    $this->Year = $Year;
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
     * @return \PMG\BingAds\Bulk\Date
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
     * @return \PMG\BingAds\Bulk\Date
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
     * @return \PMG\BingAds\Bulk\Date
     */
    public function setYear($Year)
    {
        $this->Year = $Year;
        return $this;
    }

}
