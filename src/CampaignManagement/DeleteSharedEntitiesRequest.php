<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteSharedEntitiesRequest
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteSharedEntitiesRequest
     */
    public function setSharedEntities($SharedEntities)
    {
      $this->SharedEntities = $SharedEntities;
      return $this;
    }

}
