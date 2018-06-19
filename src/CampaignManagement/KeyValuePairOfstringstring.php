<?php

namespace PMG\BingAds\CampaignManagement;

class KeyValuePairOfstringstring
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \PMG\BingAds\CampaignManagement\KeyValuePairOfstringstring
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \PMG\BingAds\CampaignManagement\KeyValuePairOfstringstring
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
