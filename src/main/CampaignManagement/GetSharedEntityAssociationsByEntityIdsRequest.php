<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntityAssociationsByEntityIdsRequest
{

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @var EntityScope $SharedEntityScope
     */
    protected $SharedEntityScope = null;

    /**
     * @param ArrayOflong $EntityIds
     * @param string $EntityType
     * @param string $SharedEntityType
     * @param EntityScope $SharedEntityScope
     */
    public function __construct($EntityIds = null, $EntityType = null, $SharedEntityType = null, $SharedEntityScope = null)
    {
    $this->EntityIds = $EntityIds;
    $this->EntityType = $EntityType;
    $this->SharedEntityType = $SharedEntityType;
    $this->SharedEntityScope = $SharedEntityScope;
    }

    /**
     * @return ArrayOflong
     */
    public function getEntityIds()
    {
        return $this->EntityIds;
    }

    /**
     * @param ArrayOflong $EntityIds
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setEntityIds($EntityIds)
    {
        $this->EntityIds = $EntityIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
        $this->EntityType = $EntityType;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest
     */
    public function setSharedEntityScope($SharedEntityScope)
    {
        $this->SharedEntityScope = $SharedEntityScope;
        return $this;
    }

}
