<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntitiesByAccountIdResponse
{

    /**
     * @var ArrayOfSharedEntity $SharedEntities
     */
    protected $SharedEntities = null;

    /**
     * @param ArrayOfSharedEntity $SharedEntities
     */
    public function __construct($SharedEntities)
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntitiesByAccountIdResponse
     */
    public function setSharedEntities($SharedEntities)
    {
      $this->SharedEntities = $SharedEntities;
      return $this;
    }

}
