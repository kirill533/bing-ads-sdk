<?php

namespace PMG\BingAds\CampaignManagement;

class DeviceCriterion extends Criterion
{

    /**
     * @var string $DeviceName
     */
    protected $DeviceName = null;

    /**
     * @var string $OSName
     */
    protected $OSName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDeviceName()
    {
      return $this->DeviceName;
    }

    /**
     * @param string $DeviceName
     * @return \PMG\BingAds\CampaignManagement\DeviceCriterion
     */
    public function setDeviceName($DeviceName)
    {
      $this->DeviceName = $DeviceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOSName()
    {
      return $this->OSName;
    }

    /**
     * @param string $OSName
     * @return \PMG\BingAds\CampaignManagement\DeviceCriterion
     */
    public function setOSName($OSName)
    {
      $this->OSName = $OSName;
      return $this;
    }

}
