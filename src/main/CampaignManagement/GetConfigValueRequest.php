<?php

namespace PMG\BingAds\CampaignManagement;

class GetConfigValueRequest
{

    /**
     * @var string $ConfigKey
     */
    protected $ConfigKey = null;

    /**
     * @param string $ConfigKey
     */
    public function __construct($ConfigKey = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetConfigValueRequest
     */
    public function setConfigKey($ConfigKey)
    {
        $this->ConfigKey = $ConfigKey;
        return $this;
    }

}
