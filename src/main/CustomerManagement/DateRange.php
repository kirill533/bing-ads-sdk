<?php

namespace PMG\BingAds\CustomerManagement;

class DateRange
{

    /**
     * @var string $MinDate
     */
    protected $MinDate = null;

    /**
     * @var string $MaxDate
     */
    protected $MaxDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMinDate()
    {
        return $this->MinDate;
    }

    /**
     * @param string $MinDate
     * @return \PMG\BingAds\CustomerManagement\DateRange
     */
    public function setMinDate($MinDate)
    {
        $this->MinDate = $MinDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxDate()
    {
        return $this->MaxDate;
    }

    /**
     * @param string $MaxDate
     * @return \PMG\BingAds\CustomerManagement\DateRange
     */
    public function setMaxDate($MaxDate)
    {
        $this->MaxDate = $MaxDate;
        return $this;
    }

}
