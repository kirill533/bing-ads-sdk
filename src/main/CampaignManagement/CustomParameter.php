<?php

namespace PMG\BingAds\CampaignManagement;

class CustomParameter
{

    /**
     * @var string $Key
     */
    protected $Key = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param string $Key
     * @return \PMG\BingAds\CampaignManagement\CustomParameter
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \PMG\BingAds\CampaignManagement\CustomParameter
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
