<?php

namespace PMG\BingAds\CampaignManagement;

class AccountProperty
{

    /**
     * @see \PMG\BingAds\CampaignManagement\AccountPropertyName for valid values
     *
     * @var string $Name
     */
    protected $Name = null;

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
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\AccountProperty
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \PMG\BingAds\CampaignManagement\AccountProperty
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
