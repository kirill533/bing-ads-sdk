<?php

namespace PMG\BingAds\CampaignManagement;

class AppInstallGoal extends ConversionGoal
{

    /**
     * @var string $AppPlatform
     */
    protected $AppPlatform = null;

    /**
     * @var string $AppStoreId
     */
    protected $AppStoreId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAppPlatform()
    {
      return $this->AppPlatform;
    }

    /**
     * @param string $AppPlatform
     * @return \PMG\BingAds\CampaignManagement\AppInstallGoal
     */
    public function setAppPlatform($AppPlatform)
    {
      $this->AppPlatform = $AppPlatform;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppStoreId()
    {
      return $this->AppStoreId;
    }

    /**
     * @param string $AppStoreId
     * @return \PMG\BingAds\CampaignManagement\AppInstallGoal
     */
    public function setAppStoreId($AppStoreId)
    {
      $this->AppStoreId = $AppStoreId;
      return $this;
    }

}
