<?php

namespace PMG\BingAds\CampaignMangagement;

class GetLabelAssociationsByEntityIdsResponse
{

    /**
     * @var ArrayOfLabelAssociation $LabelAssociations
     */
    protected $LabelAssociations = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfLabelAssociation $LabelAssociations
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($LabelAssociations, $PartialErrors)
    {
      $this->LabelAssociations = $LabelAssociations;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignMangagement\GetLabelAssociationsByEntityIdsResponse
     */
    public function setLabelAssociations($LabelAssociations)
    {
      $this->LabelAssociations = $LabelAssociations;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignMangagement\GetLabelAssociationsByEntityIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
