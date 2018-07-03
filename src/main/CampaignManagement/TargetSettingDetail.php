<?php

namespace PMG\BingAds\CampaignManagement;

class TargetSettingDetail
{

    /**
     * @see \PMG\BingAds\CampaignManagement\CriterionTypeGroup for valid values
     *
     * @var string $CriterionTypeGroup
     */
    protected $CriterionTypeGroup = null;

    /**
     * @var boolean $TargetAndBid
     */
    protected $TargetAndBid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCriterionTypeGroup()
    {
      return $this->CriterionTypeGroup;
    }

    /**
     * @param string $CriterionTypeGroup
     * @return \PMG\BingAds\CampaignManagement\TargetSettingDetail
     */
    public function setCriterionTypeGroup($CriterionTypeGroup)
    {
      $this->CriterionTypeGroup = $CriterionTypeGroup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetAndBid()
    {
      return $this->TargetAndBid;
    }

    /**
     * @param boolean $TargetAndBid
     * @return \PMG\BingAds\CampaignManagement\TargetSettingDetail
     */
    public function setTargetAndBid($TargetAndBid)
    {
      $this->TargetAndBid = $TargetAndBid;
      return $this;
    }

}
