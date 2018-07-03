<?php

namespace PMG\BingAds\CampaignManagement;

class GetProfileDataFileUrlRequest
{

    /**
     * @var string $LanguageLocale
     */
    protected $LanguageLocale = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ProfileType for valid values
     *
     * @var list $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param string $LanguageLocale
     * @param list $ProfileType
     */
    public function __construct($LanguageLocale = null, $ProfileType = null)
    {
      $this->LanguageLocale = $LanguageLocale;
      $this->ProfileType = $ProfileType;
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
     * @return \PMG\BingAds\CampaignManagement\GetProfileDataFileUrlRequest
     */
    public function setLanguageLocale($LanguageLocale)
    {
      $this->LanguageLocale = $LanguageLocale;
      return $this;
    }

    /**
     * @return list
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param list $ProfileType
     * @return \PMG\BingAds\CampaignManagement\GetProfileDataFileUrlRequest
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
