<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionsAssociationsResponse
{

    /**
     * @var ArrayOfAdExtensionAssociationCollection $AdExtensionAssociationCollection
     */
    protected $AdExtensionAssociationCollection = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdExtensionAssociationCollection $AdExtensionAssociationCollection
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdExtensionAssociationCollection, $PartialErrors)
    {
      $this->AdExtensionAssociationCollection = $AdExtensionAssociationCollection;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAdExtensionAssociationCollection
     */
    public function getAdExtensionAssociationCollection()
    {
      return $this->AdExtensionAssociationCollection;
    }

    /**
     * @param ArrayOfAdExtensionAssociationCollection $AdExtensionAssociationCollection
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsResponse
     */
    public function setAdExtensionAssociationCollection($AdExtensionAssociationCollection)
    {
      $this->AdExtensionAssociationCollection = $AdExtensionAssociationCollection;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
