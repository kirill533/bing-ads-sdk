<?php

namespace PMG\BingAds\CampaignManagement;

class GetEditorialReasonsByIdsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfEntityIdToParentIdAssociation $EntityIdToParentIdAssociations
     */
    protected $EntityIdToParentIdAssociations = null;

    /**
     * @var EntityType $EntityType
     */
    protected $EntityType = null;

    /**
     * @param int $AccountId
     * @param ArrayOfEntityIdToParentIdAssociation $EntityIdToParentIdAssociations
     * @param EntityType $EntityType
     */
    public function __construct($AccountId, $EntityIdToParentIdAssociations, $EntityType)
    {
      $this->AccountId = $AccountId;
      $this->EntityIdToParentIdAssociations = $EntityIdToParentIdAssociations;
      $this->EntityType = $EntityType;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\GetEditorialReasonsByIdsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOfEntityIdToParentIdAssociation
     */
    public function getEntityIdToParentIdAssociations()
    {
      return $this->EntityIdToParentIdAssociations;
    }

    /**
     * @param ArrayOfEntityIdToParentIdAssociation $EntityIdToParentIdAssociations
     * @return \PMG\BingAds\CampaignManagement\GetEditorialReasonsByIdsRequest
     */
    public function setEntityIdToParentIdAssociations($EntityIdToParentIdAssociations)
    {
      $this->EntityIdToParentIdAssociations = $EntityIdToParentIdAssociations;
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
     * @return \PMG\BingAds\CampaignManagement\GetEditorialReasonsByIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

}
