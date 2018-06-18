<?php

namespace PMG\BingAds\CampaignMangagement;

class GetBSCCountriesResponse
{

    /**
     * @var ArrayOfstring $CountryCodes
     */
    protected $CountryCodes = null;

    /**
     * @param ArrayOfstring $CountryCodes
     */
    public function __construct($CountryCodes)
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
     * @return \PMG\BingAds\CampaignMangagement\GetBSCCountriesResponse
     */
    public function setCountryCodes($CountryCodes)
    {
      $this->CountryCodes = $CountryCodes;
      return $this;
    }

}
