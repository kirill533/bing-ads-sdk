<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteSharedEntitiesRequest
{

    /**
     * @var ArrayOfSharedEntity $SharedEntities
     */
    protected $SharedEntities = null;

    /**
     * @param ArrayOfSharedEntity $SharedEntities
     */
    public function __construct($SharedEntities = null)
    {
    $this->SharedEntities = $SharedEntities;
    }

    /**
     * @return ArrayOfSharedEntity
     */
    public function getSharedEntities()
    {
        return $this->SharedEntities;
    }

    /**
     * @param ArrayOfSharedEntity $SharedEntities
     * @return \PMG\BingAds\CampaignManagement\DeleteSharedEntitiesRequest
     */
    public function setSharedEntities($SharedEntities)
    {
        $this->SharedEntities = $SharedEntities;
        return $this;
    }

}
