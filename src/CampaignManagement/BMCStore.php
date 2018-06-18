<?php

namespace PMG\BingAds\CampaignMangagement;

class BMCStore
{

    /**
     * @var boolean $HasCatalog
     */
    protected $HasCatalog = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var boolean $IsProductAdsEnabled
     */
    protected $IsProductAdsEnabled = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var BMCStoreSubType $SubType
     */
    protected $SubType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getHasCatalog()
    {
      return $this->HasCatalog;
    }

    /**
     * @param boolean $HasCatalog
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setHasCatalog($HasCatalog)
    {
      $this->HasCatalog = $HasCatalog;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setIsActive($IsActive)
    {
      $this->IsActive = $IsActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProductAdsEnabled()
    {
      return $this->IsProductAdsEnabled;
    }

    /**
     * @param boolean $IsProductAdsEnabled
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setIsProductAdsEnabled($IsProductAdsEnabled)
    {
      $this->IsProductAdsEnabled = $IsProductAdsEnabled;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return BMCStoreSubType
     */
    public function getSubType()
    {
      return $this->SubType;
    }

    /**
     * @param BMCStoreSubType $SubType
     * @return \PMG\BingAds\CampaignMangagement\BMCStore
     */
    public function setSubType($SubType)
    {
      $this->SubType = $SubType;
      return $this;
    }

}
