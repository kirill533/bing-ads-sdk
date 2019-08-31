<?php

namespace PMG\BingAds\CampaignManagement;

class GetBSCCountriesResponse
{

    /**
     * @var ArrayOfstring $CountryCodes
     */
    protected $CountryCodes = null;

    /**
     * @param ArrayOfstring $CountryCodes
     */
    public function __construct($CountryCodes = null)
    {
    $this->CountryCodes = $CountryCodes;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCountryCodes()
    {
        return $this->CountryCodes;
    }

    /**
     * @param ArrayOfstring $CountryCodes
     * @return \PMG\BingAds\CampaignManagement\GetBSCCountriesResponse
     */
    public function setCountryCodes($CountryCodes)
    {
        $this->CountryCodes = $CountryCodes;
        return $this;
    }

}
