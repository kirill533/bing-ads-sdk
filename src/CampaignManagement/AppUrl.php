<?php

namespace PMG\BingAds\CampaignMangagement;

class AppUrl
{

    /**
     * @var string $OsType
     */
    protected $OsType = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOsType()
    {
      return $this->OsType;
    }

    /**
     * @param string $OsType
     * @return \PMG\BingAds\CampaignMangagement\AppUrl
     */
    public function setOsType($OsType)
    {
      $this->OsType = $OsType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \PMG\BingAds\CampaignMangagement\AppUrl
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}
