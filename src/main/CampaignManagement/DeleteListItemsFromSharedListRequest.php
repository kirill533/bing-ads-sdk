<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteListItemsFromSharedListRequest
{

    /**
     * @var ArrayOflong $ListItemIds
     */
    protected $ListItemIds = null;

    /**
     * @var SharedList $SharedList
     */
    protected $SharedList = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param ArrayOflong $ListItemIds
     * @param SharedList $SharedList
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($ListItemIds = null, $SharedList = null, $SharedEntityScope = null)
    {
    $this->ListItemIds = $ListItemIds;
    $this->SharedList = $SharedList;
    $this->SharedEntityScope = $SharedEntityScope;
    }

    /**
     * @return ArrayOflong
     */
    public function getListItemIds()
    {
        return $this->ListItemIds;
    }

    /**
     * @param ArrayOflong $ListItemIds
     * @return \PMG\BingAds\CampaignManagement\DeleteListItemsFromSharedListRequest
     */
    public function setListItemIds($ListItemIds)
    {
        $this->ListItemIds = $ListItemIds;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteListItemsFromSharedListRequest
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
     * @return \PMG\BingAds\CampaignManagement\DeleteListItemsFromSharedListRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
