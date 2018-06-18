<?php

namespace PMG\BingAds\CampaignMangagement;

class AppInstallAd extends Ad
{

    /**
     * @var string $AppPlatform
     */
    protected $AppPlatform = null;

    /**
     * @var string $AppStoreId
     */
    protected $AppStoreId = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    
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
     * @return \PMG\BingAds\CampaignMangagement\AppInstallAd
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
     * @return \PMG\BingAds\CampaignMangagement\AppInstallAd
     */
    public function setAppStoreId($AppStoreId)
    {
      $this->AppStoreId = $AppStoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \PMG\BingAds\CampaignMangagement\AppInstallAd
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \PMG\BingAds\CampaignMangagement\AppInstallAd
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
