<?php

namespace PMG\BingAds\AdInsight;

class DateRangeSearchParameter extends SearchParameter
{

    /**
     * @var DayMonthAndYear $EndDate
     */
    protected $EndDate = null;

    /**
     * @var DayMonthAndYear $StartDate
     */
    protected $StartDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DayMonthAndYear
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param DayMonthAndYear $EndDate
     * @return \PMG\BingAds\AdInsight\DateRangeSearchParameter
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param DayMonthAndYear $StartDate
     * @return \PMG\BingAds\AdInsight\DateRangeSearchParameter
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

}
