<?php

namespace PMG\BingAds\CampaignManagement;

class ShoppingSetting extends Setting
{

    /**
     * @var boolean $LocalInventoryAdsEnabled
     */
    protected $LocalInventoryAdsEnabled = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var string $SalesCountryCode
     */
    protected $SalesCountryCode = null;

    /**
     * @var int $StoreId
     */
    protected $StoreId = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getLocalInventoryAdsEnabled()
    {
        return $this->LocalInventoryAdsEnabled;
    }

    /**
     * @param boolean $LocalInventoryAdsEnabled
     * @return \PMG\BingAds\CampaignManagement\ShoppingSetting
     */
    public function setLocalInventoryAdsEnabled($LocalInventoryAdsEnabled)
    {
        $this->LocalInventoryAdsEnabled = $LocalInventoryAdsEnabled;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \PMG\BingAds\CampaignManagement\ShoppingSetting
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesCountryCode()
    {
        return $this->SalesCountryCode;
    }

    /**
     * @param string $SalesCountryCode
     * @return \PMG\BingAds\CampaignManagement\ShoppingSetting
     */
    public function setSalesCountryCode($SalesCountryCode)
    {
        $this->SalesCountryCode = $SalesCountryCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param int $StoreId
     * @return \PMG\BingAds\CampaignManagement\ShoppingSetting
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

}
