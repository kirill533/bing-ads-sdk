<?php

namespace PMG\BingAds\CampaignManagement;

class AddSharedEntityRequest
{

    /**
     * @var SharedEntity $SharedEntity
     */
    protected $SharedEntity = null;

    /**
     * @var ArrayOfSharedListItem $ListItems
     */
    protected $ListItems = null;

    /**
     * @param SharedEntity $SharedEntity
     * @param ArrayOfSharedListItem $ListItems
     */
    public function __construct($SharedEntity, $ListItems)
    {
      $this->SharedEntity = $SharedEntity;
      $this->ListItems = $ListItems;
    }

    /**
     * @return SharedEntity
     */
    public function getSharedEntity()
    {
      return $this->SharedEntity;
    }

    /**
     * @param SharedEntity $SharedEntity
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityRequest
     */
    public function setSharedEntity($SharedEntity)
    {
      $this->SharedEntity = $SharedEntity;
      return $this;
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
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityRequest
     */
    public function setListItems($ListItems)
    {
      $this->ListItems = $ListItems;
      return $this;
    }

}
