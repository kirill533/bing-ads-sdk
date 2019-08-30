<?php

namespace PMG\BingAds\CampaignManagement;

class GetUetTagsByIdsRequest
{

    /**
     * @var ArrayOflong $TagIds
     */
    protected $TagIds = null;

    /**
     * @param ArrayOflong $TagIds
     */
    public function __construct($TagIds = null)
    {
    $this->TagIds = $TagIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getTagIds()
    {
        return $this->TagIds;
    }

    /**
     * @param ArrayOflong $TagIds
     * @return \PMG\BingAds\CampaignManagement\GetUetTagsByIdsRequest
     */
    public function setTagIds($TagIds)
    {
        $this->TagIds = $TagIds;
        return $this;
    }

}
