<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\TargetSetting
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

}
