<?php

namespace PMG\BingAds\CampaignManagement;

class AppealEditorialRejectionsRequest
{

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
     * @var string $JustificationText
     */
    protected $JustificationText = null;

    /**
     * @param ArrayOfEntityIdToParentIdAssociation $EntityIdToParentIdAssociations
     * @param string $EntityType
     * @param string $JustificationText
     */
    public function __construct($EntityIdToParentIdAssociations = null, $EntityType = null, $JustificationText = null)
    {
      $this->EntityIdToParentIdAssociations = $EntityIdToParentIdAssociations;
      $this->EntityType = $EntityType;
      $this->JustificationText = $JustificationText;
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
     * @return \PMG\BingAds\CampaignManagement\AppealEditorialRejectionsRequest
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
     * @return \PMG\BingAds\CampaignManagement\AppealEditorialRejectionsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getJustificationText()
    {
      return $this->JustificationText;
    }

    /**
     * @param string $JustificationText
     * @return \PMG\BingAds\CampaignManagement\AppealEditorialRejectionsRequest
     */
    public function setJustificationText($JustificationText)
    {
      $this->JustificationText = $JustificationText;
      return $this;
    }

}
