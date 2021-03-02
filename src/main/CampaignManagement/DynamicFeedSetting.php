<?php

namespace PMG\BingAds\CampaignManagement;

class DynamicFeedSetting extends Setting
{

    /**
     * @var int $FeedId
     */
    protected $FeedId = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
        return $this->FeedId;
    }

    /**
     * @param int $FeedId
     * @return \PMG\BingAds\CampaignManagement\DynamicFeedSetting
     */
    public function setFeedId($FeedId)
    {
        $this->FeedId = $FeedId;
        return $this;
    }

}
