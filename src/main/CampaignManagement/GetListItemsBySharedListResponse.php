<?php

namespace PMG\BingAds\CampaignManagement;

class GetListItemsBySharedListResponse
{

    /**
     * @var ArrayOfSharedListItem $ListItems
     */
    protected $ListItems = null;

    /**
     * @param ArrayOfSharedListItem $ListItems
     */
    public function __construct($ListItems = null)
    {
    $this->ListItems = $ListItems;
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
     * @return \PMG\BingAds\CampaignManagement\GetListItemsBySharedListResponse
     */
    public function setListItems($ListItems)
    {
        $this->ListItems = $ListItems;
        return $this;
    }

}
