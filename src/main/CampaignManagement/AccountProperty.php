<?php

namespace PMG\BingAds\CampaignManagement;

class AccountProperty
{

    /**
     * @var AccountPropertyName $Name
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
     * @return AccountPropertyName
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param AccountPropertyName $Name
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
