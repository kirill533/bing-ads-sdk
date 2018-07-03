<?php

namespace PMG\BingAds\CampaignManagement;

class DayTimeCriterion extends Criterion
{

    /**
     * @see \PMG\BingAds\CampaignManagement\Day for valid values
     *
     * @var string $Day
     */
    protected $Day = null;

    /**
     * @var int $FromHour
     */
    protected $FromHour = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\Minute for valid values
     *
     * @var string $FromMinute
     */
    protected $FromMinute = null;

    /**
     * @var int $ToHour
     */
    protected $ToHour = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\Minute for valid values
     *
     * @var string $ToMinute
     */
    protected $ToMinute = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setDay($Day)
    {
      $this->Day = $Day;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromHour()
    {
      return $this->FromHour;
    }

    /**
     * @param int $FromHour
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setFromHour($FromHour)
    {
      $this->FromHour = $FromHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromMinute()
    {
      return $this->FromMinute;
    }

    /**
     * @param string $FromMinute
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setFromMinute($FromMinute)
    {
      $this->FromMinute = $FromMinute;
      return $this;
    }

    /**
     * @return int
     */
    public function getToHour()
    {
      return $this->ToHour;
    }

    /**
     * @param int $ToHour
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setToHour($ToHour)
    {
      $this->ToHour = $ToHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getToMinute()
    {
      return $this->ToMinute;
    }

    /**
     * @param string $ToMinute
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setToMinute($ToMinute)
    {
      $this->ToMinute = $ToMinute;
      return $this;
    }

}
