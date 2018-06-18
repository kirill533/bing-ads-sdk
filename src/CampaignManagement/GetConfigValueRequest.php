<?php

namespace PMG\BingAds\CampaignMangagement;

class GetConfigValueRequest
{

    /**
     * @var string $ConfigKey
     */
    protected $ConfigKey = null;

    /**
     * @param string $ConfigKey
     */
    public function __construct($ConfigKey)
    {
      $this->ConfigKey = $ConfigKey;
    }

    /**
     * @return string
     */
    public function getConfigKey()
    {
      return $this->ConfigKey;
    }

    /**
     * @param string $ConfigKey
     * @return \PMG\BingAds\CampaignMangagement\GetConfigValueRequest
     */
    public function setConfigKey($ConfigKey)
    {
      $this->ConfigKey = $ConfigKey;
      return $this;
    }

}
