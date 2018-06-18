<?php

namespace PMG\BingAds\CampaignMangagement;

class GetConfigValueResponse
{

    /**
     * @var string $ConfigValue
     */
    protected $ConfigValue = null;

    /**
     * @param string $ConfigValue
     */
    public function __construct($ConfigValue)
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
     * @return \PMG\BingAds\CampaignMangagement\GetConfigValueResponse
     */
    public function setConfigValue($ConfigValue)
    {
      $this->ConfigValue = $ConfigValue;
      return $this;
    }

}
