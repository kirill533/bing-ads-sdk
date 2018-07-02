<?php

namespace PMG\BingAds\CampaignManagement;

class AdExtensionAssociationCollection
{

    /**
     * @var ArrayOfAdExtensionAssociation $AdExtensionAssociations
     */
    protected $AdExtensionAssociations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAdExtensionAssociation
     */
    public function getAdExtensionAssociations()
    {
      return $this->AdExtensionAssociations;
    }

    /**
     * @param ArrayOfAdExtensionAssociation $AdExtensionAssociations
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociationCollection
     */
    public function setAdExtensionAssociations($AdExtensionAssociations)
    {
      $this->AdExtensionAssociations = $AdExtensionAssociations;
      return $this;
    }

}
