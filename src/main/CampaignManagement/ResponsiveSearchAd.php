<?php

namespace PMG\BingAds\CampaignManagement;

class ResponsiveSearchAd extends Ad
{

    /**
     * @var ArrayOfAssetLink $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var string $Domain
     */
    protected $Domain = null;

    /**
     * @var ArrayOfAssetLink $Headlines
     */
    protected $Headlines = null;

    /**
     * @var string $Path1
     */
    protected $Path1 = null;

    /**
     * @var string $Path2
     */
    protected $Path2 = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfAssetLink
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }

    /**
     * @param ArrayOfAssetLink $Descriptions
     * @return \PMG\BingAds\CampaignManagement\ResponsiveSearchAd
     */
    public function setDescriptions($Descriptions)
    {
        $this->Descriptions = $Descriptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return \PMG\BingAds\CampaignManagement\ResponsiveSearchAd
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;
        return $this;
    }

    /**
     * @return ArrayOfAssetLink
     */
    public function getHeadlines()
    {
        return $this->Headlines;
    }

    /**
     * @param ArrayOfAssetLink $Headlines
     * @return \PMG\BingAds\CampaignManagement\ResponsiveSearchAd
     */
    public function setHeadlines($Headlines)
    {
        $this->Headlines = $Headlines;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath1()
    {
        return $this->Path1;
    }

    /**
     * @param string $Path1
     * @return \PMG\BingAds\CampaignManagement\ResponsiveSearchAd
     */
    public function setPath1($Path1)
    {
        $this->Path1 = $Path1;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath2()
    {
        return $this->Path2;
    }

    /**
     * @param string $Path2
     * @return \PMG\BingAds\CampaignManagement\ResponsiveSearchAd
     */
    public function setPath2($Path2)
    {
        $this->Path2 = $Path2;
        return $this;
    }

}
