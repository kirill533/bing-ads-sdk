<?php

namespace PMG\BingAds\CampaignManagement;

class SetLabelAssociationsRequest
{

    /**
     * @var EntityType $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOfLabelAssociation $LabelAssociations
     */
    protected $LabelAssociations = null;

    /**
     * @param EntityType $EntityType
     * @param ArrayOfLabelAssociation $LabelAssociations
     */
    public function __construct($EntityType, $LabelAssociations)
    {
      $this->EntityType = $EntityType;
      $this->LabelAssociations = $LabelAssociations;
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
     * @return \PMG\BingAds\CampaignManagement\SetLabelAssociationsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return ArrayOfLabelAssociation
     */
    public function getLabelAssociations()
    {
      return $this->LabelAssociations;
    }

    /**
     * @param ArrayOfLabelAssociation $LabelAssociations
     * @return \PMG\BingAds\CampaignManagement\SetLabelAssociationsRequest
     */
    public function setLabelAssociations($LabelAssociations)
    {
      $this->LabelAssociations = $LabelAssociations;
      return $this;
    }

}
