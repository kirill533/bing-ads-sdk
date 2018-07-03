<?php

namespace PMG\BingAds\CampaignManagement;

class MediaAssociation
{

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\MediaEnabledEntityFilter for valid values
     *
     * @var list $MediaEnabledEntity
     */
    protected $MediaEnabledEntity = null;

    /**
     * @var int $MediaId
     */
    protected $MediaId = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignManagement\MediaAssociation
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return list
     */
    public function getMediaEnabledEntity()
    {
      return $this->MediaEnabledEntity;
    }

    /**
     * @param list $MediaEnabledEntity
     * @return \PMG\BingAds\CampaignManagement\MediaAssociation
     */
    public function setMediaEnabledEntity($MediaEnabledEntity)
    {
      $this->MediaEnabledEntity = $MediaEnabledEntity;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
      return $this->MediaId;
    }

    /**
     * @param int $MediaId
     * @return \PMG\BingAds\CampaignManagement\MediaAssociation
     */
    public function setMediaId($MediaId)
    {
      $this->MediaId = $MediaId;
      return $this;
    }

}
