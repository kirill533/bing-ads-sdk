<?php

namespace PMG\BingAds\CampaignManagement;

class DynamicSearchAdsSetting extends Setting
{

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var ArrayOflong $PageFeedIds
     */
    protected $PageFeedIds = null;

    /**
     * @var DynamicSearchAdsSource $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAdsSetting
     */
    public function setDomainName($DomainName)
    {
        $this->DomainName = $DomainName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAdsSetting
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getPageFeedIds()
    {
        return $this->PageFeedIds;
    }

    /**
     * @param ArrayOflong $PageFeedIds
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAdsSetting
     */
    public function setPageFeedIds($PageFeedIds)
    {
        $this->PageFeedIds = $PageFeedIds;
        return $this;
    }

    /**
     * @return DynamicSearchAdsSource
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param DynamicSearchAdsSource $Source
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAdsSetting
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
        return $this;
    }

}
