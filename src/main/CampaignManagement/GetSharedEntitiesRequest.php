<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntitiesRequest
{

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param string $SharedEntityType
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($SharedEntityType = null, $SharedEntityScope = null)
    {
    $this->SharedEntityType = $SharedEntityType;
    $this->SharedEntityScope = $SharedEntityScope;
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntitiesRequest
     */
    public function setSharedEntityType($SharedEntityType)
    {
        $this->SharedEntityType = $SharedEntityType;
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntitiesRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
