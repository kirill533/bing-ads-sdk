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
     * @see \PMG\BingAds\CampaignManagement\EntityType for valid values
     *
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @param int $AccountId
     * @param ArrayOfEntityIdToParentIdAssociation $EntityIdToParentIdAssociations
     * @param string $EntityType
     */
    public function __construct($AccountId = null, $EntityIdToParentIdAssociations = null, $EntityType = null)
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
     * @return string
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\CampaignManagement\GetEditorialReasonsByIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

}
