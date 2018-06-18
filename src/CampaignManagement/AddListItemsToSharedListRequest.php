<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @param ArrayOfSharedListItem $ListItems
     * @param SharedList $SharedList
     */
    public function __construct($ListItems, $SharedList)
    {
      $this->ListItems = $ListItems;
      $this->SharedList = $SharedList;
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
     * @return \PMG\BingAds\CampaignMangagement\AddListItemsToSharedListRequest
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
     * @return \PMG\BingAds\CampaignMangagement\AddListItemsToSharedListRequest
     */
    public function setSharedList($SharedList)
    {
      $this->SharedList = $SharedList;
      return $this;
    }

}
