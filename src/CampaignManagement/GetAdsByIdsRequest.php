<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdsByIdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOflong $AdIds
     */
    protected $AdIds = null;

    /**
     * @var ArrayOfAdType $AdTypes
     */
    protected $AdTypes = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOflong $AdIds
     * @param ArrayOfAdType $AdTypes
     */
    public function __construct($AdGroupId, $AdIds, $AdTypes)
    {
      $this->AdGroupId = $AdGroupId;
      $this->AdIds = $AdIds;
      $this->AdTypes = $AdTypes;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByIdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdIds()
    {
      return $this->AdIds;
    }

    /**
     * @param ArrayOflong $AdIds
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByIdsRequest
     */
    public function setAdIds($AdIds)
    {
      $this->AdIds = $AdIds;
      return $this;
    }

    /**
     * @return ArrayOfAdType
     */
    public function getAdTypes()
    {
      return $this->AdTypes;
    }

    /**
     * @param ArrayOfAdType $AdTypes
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByIdsRequest
     */
    public function setAdTypes($AdTypes)
    {
      $this->AdTypes = $AdTypes;
      return $this;
    }

}
