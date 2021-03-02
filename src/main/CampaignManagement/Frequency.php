<?php

namespace PMG\BingAds\CampaignManagement;

class Frequency
{

    /**
     * @var string $Cron
     */
    protected $Cron = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCron()
    {
        return $this->Cron;
    }

    /**
     * @param string $Cron
     * @return \PMG\BingAds\CampaignManagement\Frequency
     */
    public function setCron($Cron)
    {
        $this->Cron = $Cron;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return \PMG\BingAds\CampaignManagement\Frequency
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\Frequency
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
