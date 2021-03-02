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
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param SharedEntity $SharedEntity
     * @param ArrayOfSharedListItem $ListItems
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($SharedEntity = null, $ListItems = null, $SharedEntityScope = null)
    {
    $this->SharedEntity = $SharedEntity;
    $this->ListItems = $ListItems;
    $this->SharedEntityScope = $SharedEntityScope;
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

    /**
     * @return EntityScope
     */
    public function getSharedEntityScope()
    {
        return $this->SharedEntityScope;
    }

    /**
     * @param EntityScope $SharedEntityScope
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
