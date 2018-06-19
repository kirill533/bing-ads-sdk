<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntityAssociationsBySharedEntityIdsResponse
{

    /**
     * @var ArrayOfSharedEntityAssociation $Associations
     */
    protected $Associations = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Associations, $PartialErrors)
    {
      $this->Associations = $Associations;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfSharedEntityAssociation
     */
    public function getAssociations()
    {
      return $this->Associations;
    }

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsResponse
     */
    public function setAssociations($Associations)
    {
      $this->Associations = $Associations;
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
