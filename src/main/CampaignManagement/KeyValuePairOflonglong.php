<?php

namespace PMG\BingAds\CampaignManagement;

class KeyValuePairOflonglong
{

    /**
     * @var int $key
     */
    protected $key = null;

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param int $key
     * @param int $value
     */
    public function __construct($key = null, $value = null)
    {
    $this->key = $key;
    $this->value = $value;
    }

    /**
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param int $key
     * @return \PMG\BingAds\CampaignManagement\KeyValuePairOflonglong
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return \PMG\BingAds\CampaignManagement\KeyValuePairOflonglong
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}
