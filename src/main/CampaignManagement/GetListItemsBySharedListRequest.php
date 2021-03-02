<?php

namespace PMG\BingAds\CampaignManagement;

class GetListItemsBySharedListRequest
{

    /**
     * @var SharedList $SharedList
     */
    protected $SharedList = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param SharedList $SharedList
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($SharedList = null, $SharedEntityScope = null)
    {
    $this->SharedList = $SharedList;
    $this->SharedEntityScope = $SharedEntityScope;
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

    /**
     * @return EntityScope
     */
    public function getSharedEntityScope()
    {
        return $this->SharedEntityScope;
    }

    /**
     * @param EntityScope $SharedEntityScope
     * @return \PMG\BingAds\CampaignManagement\GetListItemsBySharedListRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
