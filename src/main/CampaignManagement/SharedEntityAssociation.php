<?php

namespace PMG\BingAds\CampaignManagement;

class SharedEntityAssociation
{

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var int $SharedEntityCustomerId
     */
    protected $SharedEntityCustomerId = null;

    /**
     * @var int $SharedEntityId
     */
    protected $SharedEntityId = null;

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @param int $EntityId
     * @param int $SharedEntityId
     */
    public function __construct($EntityId = null, $SharedEntityId = null)
    {
    $this->EntityId = $EntityId;
    $this->SharedEntityId = $SharedEntityId;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }

    /**
     * @param int $EntityId
     * @return \PMG\BingAds\CampaignManagement\SharedEntityAssociation
     */
    public function setEntityId($EntityId)
    {
        $this->EntityId = $EntityId;
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
     * @return \PMG\BingAds\CampaignManagement\SharedEntityAssociation
     */
    public function setEntityType($EntityType)
    {
        $this->EntityType = $EntityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharedEntityCustomerId()
    {
        return $this->SharedEntityCustomerId;
    }

    /**
     * @param int $SharedEntityCustomerId
     * @return \PMG\BingAds\CampaignManagement\SharedEntityAssociation
     */
    public function setSharedEntityCustomerId($SharedEntityCustomerId)
    {
        $this->SharedEntityCustomerId = $SharedEntityCustomerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharedEntityId()
    {
        return $this->SharedEntityId;
    }

    /**
     * @param int $SharedEntityId
     * @return \PMG\BingAds\CampaignManagement\SharedEntityAssociation
     */
    public function setSharedEntityId($SharedEntityId)
    {
        $this->SharedEntityId = $SharedEntityId;
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
     * @return \PMG\BingAds\CampaignManagement\SharedEntityAssociation
     */
    public function setSharedEntityType($SharedEntityType)
    {
        $this->SharedEntityType = $SharedEntityType;
        return $this;
    }

}
