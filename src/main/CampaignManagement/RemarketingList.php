<?php

namespace PMG\BingAds\CampaignManagement;

class RemarketingList extends Audience
{

    /**
     * @var RemarketingRule $Rule
     */
    protected $Rule = null;

    /**
     * @var int $TagId
     */
    protected $TagId = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return RemarketingRule
     */
    public function getRule()
    {
        return $this->Rule;
    }

    /**
     * @param RemarketingRule $Rule
     * @return \PMG\BingAds\CampaignManagement\RemarketingList
     */
    public function setRule($Rule)
    {
        $this->Rule = $Rule;
        return $this;
    }

    /**
     * @return int
     */
    public function getTagId()
    {
        return $this->TagId;
    }

    /**
     * @param int $TagId
     * @return \PMG\BingAds\CampaignManagement\RemarketingList
     */
    public function setTagId($TagId)
    {
        $this->TagId = $TagId;
        return $this;
    }

}
