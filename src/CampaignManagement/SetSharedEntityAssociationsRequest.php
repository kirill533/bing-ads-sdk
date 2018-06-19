<?php

namespace PMG\BingAds\CampaignManagement;

class SetSharedEntityAssociationsRequest
{

    /**
     * @var ArrayOfSharedEntityAssociation $Associations
     */
    protected $Associations = null;

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     */
    public function __construct($Associations = null)
    {
      $this->Associations = $Associations;
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
     * @return \PMG\BingAds\CampaignManagement\SetSharedEntityAssociationsRequest
     */
    public function setAssociations($Associations)
    {
      $this->Associations = $Associations;
      return $this;
    }

}
