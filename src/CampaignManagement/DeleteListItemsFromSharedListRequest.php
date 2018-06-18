<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @param ArrayOflong $ListItemIds
     * @param SharedList $SharedList
     */
    public function __construct($ListItemIds, $SharedList)
    {
      $this->ListItemIds = $ListItemIds;
      $this->SharedList = $SharedList;
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteListItemsFromSharedListRequest
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteListItemsFromSharedListRequest
     */
    public function setSharedList($SharedList)
    {
      $this->SharedList = $SharedList;
      return $this;
    }

}
