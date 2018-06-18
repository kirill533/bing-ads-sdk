<?php

namespace PMG\BingAds\CampaignMangagement;

class AdExtensionIdentity
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignMangagement\AdExtensionIdentity
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \PMG\BingAds\CampaignMangagement\AdExtensionIdentity
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
