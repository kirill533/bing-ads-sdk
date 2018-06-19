<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByAdGroupIdRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfAdType $AdTypes
     */
    protected $AdTypes = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOfAdType $AdTypes
     */
    public function __construct($AdGroupId, $AdTypes)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdRequest
     */
    public function setAdTypes($AdTypes)
    {
      $this->AdTypes = $AdTypes;
      return $this;
    }

}
