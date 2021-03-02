<?php

namespace PMG\BingAds\CampaignManagement;

class CampaignAdGroupIds
{

    /**
     * @var boolean $ActiveAdGroupsOnly
     */
    protected $ActiveAdGroupsOnly = null;

    /**
     * @var ArrayOflong $AdGroupIds
     */
    protected $AdGroupIds = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId = null)
    {
    $this->CampaignId = $CampaignId;
    }

    /**
     * @return boolean
     */
    public function getActiveAdGroupsOnly()
    {
        return $this->ActiveAdGroupsOnly;
    }

    /**
     * @param boolean $ActiveAdGroupsOnly
     * @return \PMG\BingAds\CampaignManagement\CampaignAdGroupIds
     */
    public function setActiveAdGroupsOnly($ActiveAdGroupsOnly)
    {
        $this->ActiveAdGroupsOnly = $ActiveAdGroupsOnly;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * @param ArrayOflong $AdGroupIds
     * @return \PMG\BingAds\CampaignManagement\CampaignAdGroupIds
     */
    public function setAdGroupIds($AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\CampaignManagement\CampaignAdGroupIds
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

}
