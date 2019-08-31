<?php

namespace PMG\BingAds\CampaignManagement;

class CampaignSize
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId = null)
    {
    $this->CampaignId = $CampaignId;
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
     * @return \PMG\BingAds\CampaignManagement\CampaignSize
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return \PMG\BingAds\CampaignManagement\CampaignSize
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
        return $this;
    }

}
