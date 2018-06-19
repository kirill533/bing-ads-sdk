<?php

namespace PMG\BingAds\CampaignManagement;

class EntityNegativeKeyword
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
     * @var ArrayOfNegativeKeyword $NegativeKeywords
     */
    protected $NegativeKeywords = null;

    /**
     * @param int $EntityId
     */
    public function __construct($EntityId)
    {
      $this->EntityId = $EntityId;
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
     * @return \PMG\BingAds\CampaignManagement\EntityNegativeKeyword
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
     * @return \PMG\BingAds\CampaignManagement\EntityNegativeKeyword
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return ArrayOfNegativeKeyword
     */
    public function getNegativeKeywords()
    {
      return $this->NegativeKeywords;
    }

    /**
     * @param ArrayOfNegativeKeyword $NegativeKeywords
     * @return \PMG\BingAds\CampaignManagement\EntityNegativeKeyword
     */
    public function setNegativeKeywords($NegativeKeywords)
    {
      $this->NegativeKeywords = $NegativeKeywords;
      return $this;
    }

}
