<?php

namespace PMG\BingAds\CampaignMangagement;

class EntityIdToParentIdAssociation
{

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @var int $ParentId
     */
    protected $ParentId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
      return $this->EntityId;
    }

    /**
     * @param int $EntityId
     * @return \PMG\BingAds\CampaignMangagement\EntityIdToParentIdAssociation
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
      return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return \PMG\BingAds\CampaignMangagement\EntityIdToParentIdAssociation
     */
    public function setParentId($ParentId)
    {
      $this->ParentId = $ParentId;
      return $this;
    }

}
