<?php

namespace PMG\BingAds\CampaignManagement;

class GetLabelAssociationsByEntityIdsRequest
{

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\EntityType for valid values
     *
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @param ArrayOflong $EntityIds
     * @param string $EntityType
     */
    public function __construct($EntityIds = null, $EntityType = null)
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
     * @return string
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\CampaignManagement\GetLabelAssociationsByEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

}
