<?php

namespace PMG\BingAds\CampaignManagement;

class DayTimeCriterion extends Criterion
{

    /**
     * @var Day $Day
     */
    protected $Day = null;

    /**
     * @var int $FromHour
     */
    protected $FromHour = null;

    /**
     * @var Minute $FromMinute
     */
    protected $FromMinute = null;

    /**
     * @var int $ToHour
     */
    protected $ToHour = null;

    /**
     * @var Minute $ToMinute
     */
    protected $ToMinute = null;

    
    public function __construct()
    {
        parent::__construct();
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
     * @return Minute
     */
    public function getFromMinute()
    {
        return $this->FromMinute;
    }

    /**
     * @param Minute $FromMinute
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
     * @return Minute
     */
    public function getToMinute()
    {
        return $this->ToMinute;
    }

    /**
     * @param Minute $ToMinute
     * @return \PMG\BingAds\CampaignManagement\DayTimeCriterion
     */
    public function setToMinute($ToMinute)
    {
        $this->ToMinute = $ToMinute;
        return $this;
    }

}
