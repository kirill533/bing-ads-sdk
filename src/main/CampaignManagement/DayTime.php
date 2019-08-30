<?php

namespace PMG\BingAds\CampaignManagement;

class DayTime
{

    /**
     * @var Day $Day
     */
    protected $Day = null;

    /**
     * @var int $EndHour
     */
    protected $EndHour = null;

    /**
     * @var Minute $EndMinute
     */
    protected $EndMinute = null;

    /**
     * @var int $StartHour
     */
    protected $StartHour = null;

    /**
     * @var Minute $StartMinute
     */
    protected $StartMinute = null;

    /**
     * @param Day $Day
     * @param int $EndHour
     * @param Minute $EndMinute
     * @param int $StartHour
     * @param Minute $StartMinute
     */
    public function __construct($Day = null, $EndHour = null, $EndMinute = null, $StartHour = null, $StartMinute = null)
    {
    $this->Day = $Day;
    $this->EndHour = $EndHour;
    $this->EndMinute = $EndMinute;
    $this->StartHour = $StartHour;
    $this->StartMinute = $StartMinute;
    }

    /**
     * @return Day
     */
    public function getDay()
    {
        return $this->Day;
    }

    /**
     * @param Day $Day
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndHour()
    {
        return $this->EndHour;
    }

    /**
     * @param int $EndHour
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setEndHour($EndHour)
    {
        $this->EndHour = $EndHour;
        return $this;
    }

    /**
     * @return Minute
     */
    public function getEndMinute()
    {
        return $this->EndMinute;
    }

    /**
     * @param Minute $EndMinute
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setEndMinute($EndMinute)
    {
        $this->EndMinute = $EndMinute;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartHour()
    {
        return $this->StartHour;
    }

    /**
     * @param int $StartHour
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setStartHour($StartHour)
    {
        $this->StartHour = $StartHour;
        return $this;
    }

    /**
     * @return Minute
     */
    public function getStartMinute()
    {
        return $this->StartMinute;
    }

    /**
     * @param Minute $StartMinute
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setStartMinute($StartMinute)
    {
        $this->StartMinute = $StartMinute;
        return $this;
    }

}
