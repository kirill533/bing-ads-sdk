<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteSharedEntitiesRequest
{

    /**
     * @var ArrayOfSharedEntity $SharedEntities
     */
    protected $SharedEntities = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param ArrayOfSharedEntity $SharedEntities
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($SharedEntities = null, $SharedEntityScope = null)
    {
    $this->SharedEntities = $SharedEntities;
    $this->SharedEntityScope = $SharedEntityScope;
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

    /**
     * @return EntityScope
     */
    public function getSharedEntityScope()
    {
        return $this->SharedEntityScope;
    }

    /**
     * @param EntityScope $SharedEntityScope
     * @return \PMG\BingAds\CampaignManagement\DeleteSharedEntitiesRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
