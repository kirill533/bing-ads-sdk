<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntitiesByAccountIdRequest
{

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @param string $SharedEntityType
     */
    public function __construct($SharedEntityType)
    {
      $this->SharedEntityType = $SharedEntityType;
    }

    /**
     * @return string
     */
    public function getSharedEntityType()
    {
      return $this->SharedEntityType;
    }

    /**
     * @param string $SharedEntityType
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntitiesByAccountIdRequest
     */
    public function setSharedEntityType($SharedEntityType)
    {
      $this->SharedEntityType = $SharedEntityType;
      return $this;
    }

}
