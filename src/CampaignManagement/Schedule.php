<?php

namespace PMG\BingAds\CampaignMangagement;

class Schedule
{

    /**
     * @var ArrayOfDayTime $DayTimeRanges
     */
    protected $DayTimeRanges = null;

    /**
     * @var Date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var Date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var boolean $UseSearcherTimeZone
     */
    protected $UseSearcherTimeZone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDayTime
     */
    public function getDayTimeRanges()
    {
      return $this->DayTimeRanges;
    }

    /**
     * @param ArrayOfDayTime $DayTimeRanges
     * @return \PMG\BingAds\CampaignMangagement\Schedule
     */
    public function setDayTimeRanges($DayTimeRanges)
    {
      $this->DayTimeRanges = $DayTimeRanges;
      return $this;
    }

    /**
     * @return Date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param Date $EndDate
     * @return \PMG\BingAds\CampaignMangagement\Schedule
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return Date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param Date $StartDate
     * @return \PMG\BingAds\CampaignMangagement\Schedule
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseSearcherTimeZone()
    {
      return $this->UseSearcherTimeZone;
    }

    /**
     * @param boolean $UseSearcherTimeZone
     * @return \PMG\BingAds\CampaignMangagement\Schedule
     */
    public function setUseSearcherTimeZone($UseSearcherTimeZone)
    {
      $this->UseSearcherTimeZone = $UseSearcherTimeZone;
      return $this;
    }

}
