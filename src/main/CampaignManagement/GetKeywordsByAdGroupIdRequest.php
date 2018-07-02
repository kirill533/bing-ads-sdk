<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByAdGroupIdRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @param int $AdGroupId
     */
    public function __construct($AdGroupId = null)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByAdGroupIdRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

}
