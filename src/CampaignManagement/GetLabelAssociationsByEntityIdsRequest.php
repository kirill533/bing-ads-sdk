<?php

namespace PMG\BingAds\CampaignManagement;

class GetLabelAssociationsByEntityIdsRequest
{

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var EntityType $EntityType
     */
    protected $EntityType = null;

    /**
     * @param ArrayOflong $EntityIds
     * @param EntityType $EntityType
     */
    public function __construct($EntityIds, $EntityType)
    {
      $this->EntityIds = $EntityIds;
      $this->EntityType = $EntityType;
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
     * @return \PMG\BingAds\CampaignManagement\GetLabelAssociationsByEntityIdsRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

    /**
     * @return EntityType
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param EntityType $EntityType
     * @return \PMG\BingAds\CampaignManagement\GetLabelAssociationsByEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

}
