<?php

namespace PMG\BingAds\CampaignManagement;

class AddListItemsToSharedListRequest
{

    /**
     * @var ArrayOfSharedListItem $ListItems
     */
    protected $ListItems = null;

    /**
     * @var SharedList $SharedList
     */
    protected $SharedList = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param ArrayOfSharedListItem $ListItems
     * @param SharedList $SharedList
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($ListItems = null, $SharedList = null, $SharedEntityScope = null)
    {
    $this->ListItems = $ListItems;
    $this->SharedList = $SharedList;
    $this->SharedEntityScope = $SharedEntityScope;
    }

    /**
     * @return ArrayOfSharedListItem
     */
    public function getListItems()
    {
        return $this->ListItems;
    }

    /**
     * @param ArrayOfSharedListItem $ListItems
     * @return \PMG\BingAds\CampaignManagement\AddListItemsToSharedListRequest
     */
    public function setListItems($ListItems)
    {
        $this->ListItems = $ListItems;
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
     * @return \PMG\BingAds\CampaignManagement\AddListItemsToSharedListRequest
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
     * @return \PMG\BingAds\CampaignManagement\AddListItemsToSharedListRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
