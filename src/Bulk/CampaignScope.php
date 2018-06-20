<?php

namespace PMG\BingAds\Bulk;

class CampaignScope
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var int $ParentAccountId
     */
    protected $ParentAccountId = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\Bulk\CampaignScope
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentAccountId()
    {
      return $this->ParentAccountId;
    }

    /**
     * @param int $ParentAccountId
     * @return \PMG\BingAds\Bulk\CampaignScope
     */
    public function setParentAccountId($ParentAccountId)
    {
      $this->ParentAccountId = $ParentAccountId;
      return $this;
    }

}
