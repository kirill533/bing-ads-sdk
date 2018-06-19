<?php

namespace PMG\BingAds\CampaignManagement;

class AdExtensionIdToEntityIdAssociation
{

    /**
     * @var int $AdExtensionId
     */
    protected $AdExtensionId = null;

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @param int $AdExtensionId
     * @param int $EntityId
     */
    public function __construct($AdExtensionId, $EntityId)
    {
      $this->AdExtensionId = $AdExtensionId;
      $this->EntityId = $EntityId;
    }

    /**
     * @return int
     */
    public function getAdExtensionId()
    {
      return $this->AdExtensionId;
    }

    /**
     * @param int $AdExtensionId
     * @return \PMG\BingAds\CampaignManagement\AdExtensionIdToEntityIdAssociation
     */
    public function setAdExtensionId($AdExtensionId)
    {
      $this->AdExtensionId = $AdExtensionId;
      return $this;
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
     * @return \PMG\BingAds\CampaignManagement\AdExtensionIdToEntityIdAssociation
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

}
