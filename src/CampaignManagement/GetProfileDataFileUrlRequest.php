<?php

namespace PMG\BingAds\CampaignManagement;

class GetProfileDataFileUrlRequest
{

    /**
     * @var string $LanguageLocale
     */
    protected $LanguageLocale = null;

    /**
     * @var ProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param string $LanguageLocale
     * @param ProfileType $ProfileType
     */
    public function __construct($LanguageLocale, $ProfileType)
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
     * @return ProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param ProfileType $ProfileType
     * @return \PMG\BingAds\CampaignManagement\GetProfileDataFileUrlRequest
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
