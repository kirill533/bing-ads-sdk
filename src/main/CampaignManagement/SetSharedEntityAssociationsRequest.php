<?php

namespace PMG\BingAds\CampaignManagement;

class SetSharedEntityAssociationsRequest
{

    /**
     * @var ArrayOfSharedEntityAssociation $Associations
     */
    protected $Associations = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($Associations = null, $SharedEntityScope = null)
    {
    $this->Associations = $Associations;
    $this->SharedEntityScope = $SharedEntityScope;
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

    /**
     * @return EntityScope
     */
    public function getSharedEntityScope()
    {
        return $this->SharedEntityScope;
    }

    /**
     * @param EntityScope $SharedEntityScope
     * @return \PMG\BingAds\CampaignManagement\SetSharedEntityAssociationsRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
