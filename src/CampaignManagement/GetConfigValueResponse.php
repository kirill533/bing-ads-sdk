<?php

namespace PMG\BingAds\CampaignManagement;

class GetConfigValueResponse
{

    /**
     * @var string $ConfigValue
     */
    protected $ConfigValue = null;

    /**
     * @param string $ConfigValue
     */
    public function __construct($ConfigValue = null)
    {
      $this->ConfigValue = $ConfigValue;
    }

    /**
     * @return string
     */
    public function getConfigValue()
    {
      return $this->ConfigValue;
    }

    /**
     * @param string $ConfigValue
     * @return \PMG\BingAds\CampaignManagement\GetConfigValueResponse
     */
    public function setConfigValue($ConfigValue)
    {
      $this->ConfigValue = $ConfigValue;
      return $this;
    }

}
