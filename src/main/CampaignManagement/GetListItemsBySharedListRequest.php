<?php

namespace PMG\BingAds\CampaignManagement;

class GetListItemsBySharedListRequest
{

    /**
     * @var SharedList $SharedList
     */
    protected $SharedList = null;

    /**
     * @param SharedList $SharedList
     */
    public function __construct($SharedList = null)
    {
    $this->SharedList = $SharedList;
    }

    /**
     * @return SharedList
     */
    public function getSharedList()
    {
        return $this->SharedList;
    }

    /**
     * @param SharedList $SharedList
     * @return \PMG\BingAds\CampaignManagement\GetListItemsBySharedListRequest
     */
    public function setSharedList($SharedList)
    {
        $this->SharedList = $SharedList;
        return $this;
    }

}
