<?php

namespace PMG\BingAds\CampaignManagement;

class TargetSetting extends Setting
{

    /**
     * @var ArrayOfTargetSettingDetail $Details
     */
    protected $Details = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfTargetSettingDetail
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param ArrayOfTargetSettingDetail $Details
     * @return \PMG\BingAds\CampaignManagement\TargetSetting
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;
        return $this;
    }

}
