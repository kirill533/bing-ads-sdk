<?php

namespace PMG\BingAds\CampaignManagement;

class GetGeoLocationsFileUrlRequest
{

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $LanguageLocale
     */
    protected $LanguageLocale = null;

    /**
     * @param string $Version
     * @param string $LanguageLocale
     */
    public function __construct($Version = null, $LanguageLocale = null)
    {
      $this->Version = $Version;
      $this->LanguageLocale = $LanguageLocale;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \PMG\BingAds\CampaignManagement\GetGeoLocationsFileUrlRequest
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageLocale()
    {
      return $this->LanguageLocale;
    }

    /**
     * @param string $LanguageLocale
     * @return \PMG\BingAds\CampaignManagement\GetGeoLocationsFileUrlRequest
     */
    public function setLanguageLocale($LanguageLocale)
    {
      $this->LanguageLocale = $LanguageLocale;
      return $this;
    }

}
