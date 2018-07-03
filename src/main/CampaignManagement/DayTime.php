<?php

namespace PMG\BingAds\CampaignManagement;

class DayTime
{

    /**
     * @see \PMG\BingAds\CampaignManagement\Day for valid values
     *
     * @var string $Day
     */
    protected $Day = null;

    /**
     * @var int $EndHour
     */
    protected $EndHour = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\Minute for valid values
     *
     * @var string $EndMinute
     */
    protected $EndMinute = null;

    /**
     * @var int $StartHour
     */
    protected $StartHour = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\Minute for valid values
     *
     * @var string $StartMinute
     */
    protected $StartMinute = null;

    /**
     * @param string $Day
     * @param int $EndHour
     * @param string $EndMinute
     * @param int $StartHour
     * @param string $StartMinute
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
     * @return string
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param string $Day
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
     * @return string
     */
    public function getEndMinute()
    {
      return $this->EndMinute;
    }

    /**
     * @param string $EndMinute
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
     * @return string
     */
    public function getStartMinute()
    {
      return $this->StartMinute;
    }

    /**
     * @param string $StartMinute
     * @return \PMG\BingAds\CampaignManagement\DayTime
     */
    public function setStartMinute($StartMinute)
    {
      $this->StartMinute = $StartMinute;
      return $this;
    }

}
