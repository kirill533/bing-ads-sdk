<?php

namespace PMG\BingAds\CampaignManagement;

class Company
{

    /**
     * @var string $LogoUrl
     */
    protected $LogoUrl = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ProfileId
     */
    protected $ProfileId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param int $ProfileId
     */
    public function __construct($ProfileId = null)
    {
    $this->ProfileId = $ProfileId;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->LogoUrl;
    }

    /**
     * @param string $LogoUrl
     * @return \PMG\BingAds\CampaignManagement\Company
     */
    public function setLogoUrl($LogoUrl)
    {
        $this->LogoUrl = $LogoUrl;
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
     * @return \PMG\BingAds\CampaignManagement\Company
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getProfileId()
    {
        return $this->ProfileId;
    }

    /**
     * @param int $ProfileId
     * @return \PMG\BingAds\CampaignManagement\Company
     */
    public function setProfileId($ProfileId)
    {
        $this->ProfileId = $ProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CampaignManagement\Company
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

}
