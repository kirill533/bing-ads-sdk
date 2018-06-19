<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntityAssociationsByEntityIdsRequest
{

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @param ArrayOflong $EntityIds
     * @param string $EntityType
     * @param string $SharedEntityType
     */
    public function __construct($EntityIds, $EntityType, $SharedEntityType)
    {
      $this->EntityIds = $EntityIds;
      $this->EntityType = $EntityType;
      $this->SharedEntityType = $SharedEntityType;
    }

    /**
     * @return ArrayOflong
     */
    public function getEntityIds()
    {
      return $this->EntityIds;
    }

    /**
     * @param ArrayOflong $EntityIds
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSharedEntityType()
    {
      return $this->SharedEntityType;
    }

    /**
     * @param string $SharedEntityType
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setSharedEntityType($SharedEntityType)
    {
      $this->SharedEntityType = $SharedEntityType;
      return $this;
    }

}
