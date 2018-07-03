<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteLabelAssociationsRequest
{

    /**
     * @see \PMG\BingAds\CampaignManagement\EntityType for valid values
     *
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOfLabelAssociation $LabelAssociations
     */
    protected $LabelAssociations = null;

    /**
     * @param string $EntityType
     * @param ArrayOfLabelAssociation $LabelAssociations
     */
    public function __construct($EntityType = null, $LabelAssociations = null)
    {
      $this->EntityType = $EntityType;
      $this->LabelAssociations = $LabelAssociations;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteLabelAssociationsRequest
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
     * @return \PMG\BingAds\CampaignManagement\DeleteLabelAssociationsRequest
     */
    public function setLabelAssociations($LabelAssociations)
    {
      $this->LabelAssociations = $LabelAssociations;
      return $this;
    }

}
