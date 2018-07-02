<?php

namespace PMG\BingAds\CampaignManagement;

class GetNegativeKeywordsByEntityIdsRequest
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
     * @var int $ParentEntityId
     */
    protected $ParentEntityId = null;

    /**
     * @param ArrayOflong $EntityIds
     * @param string $EntityType
     * @param int $ParentEntityId
     */
    public function __construct($EntityIds = null, $EntityType = null, $ParentEntityId = null)
    {
      $this->EntityIds = $EntityIds;
      $this->EntityType = $EntityType;
      $this->ParentEntityId = $ParentEntityId;
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
     * @return \PMG\BingAds\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentEntityId()
    {
      return $this->ParentEntityId;
    }

    /**
     * @param int $ParentEntityId
     * @return \PMG\BingAds\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest
     */
    public function setParentEntityId($ParentEntityId)
    {
      $this->ParentEntityId = $ParentEntityId;
      return $this;
    }

}
