<?php

namespace PMG\BingAds\CampaignManagement;

class GoogleImportJob extends ImportJob
{

    /**
     * @var ArrayOfCampaignAdGroupIds $CampaignAdGroupIds
     */
    protected $CampaignAdGroupIds = null;

    /**
     * @var string $CredentialId
     */
    protected $CredentialId = null;

    /**
     * @var int $GoogleAccountId
     */
    protected $GoogleAccountId = null;

    /**
     * @var string $GoogleUserName
     */
    protected $GoogleUserName = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfCampaignAdGroupIds
     */
    public function getCampaignAdGroupIds()
    {
        return $this->CampaignAdGroupIds;
    }

    /**
     * @param ArrayOfCampaignAdGroupIds $CampaignAdGroupIds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportJob
     */
    public function setCampaignAdGroupIds($CampaignAdGroupIds)
    {
        $this->CampaignAdGroupIds = $CampaignAdGroupIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getCredentialId()
    {
        return $this->CredentialId;
    }

    /**
     * @param string $CredentialId
     * @return \PMG\BingAds\CampaignManagement\GoogleImportJob
     */
    public function setCredentialId($CredentialId)
    {
        $this->CredentialId = $CredentialId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGoogleAccountId()
    {
        return $this->GoogleAccountId;
    }

    /**
     * @param int $GoogleAccountId
     * @return \PMG\BingAds\CampaignManagement\GoogleImportJob
     */
    public function setGoogleAccountId($GoogleAccountId)
    {
        $this->GoogleAccountId = $GoogleAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleUserName()
    {
        return $this->GoogleUserName;
    }

    /**
     * @param string $GoogleUserName
     * @return \PMG\BingAds\CampaignManagement\GoogleImportJob
     */
    public function setGoogleUserName($GoogleUserName)
    {
        $this->GoogleUserName = $GoogleUserName;
        return $this;
    }

}
