<?php

namespace PMG\BingAds\CampaignMangagement;

class GetKeywordsByAdGroupIdRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @param int $AdGroupId
     */
    public function __construct($AdGroupId)
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
     * @return \PMG\BingAds\CampaignMangagement\GetKeywordsByAdGroupIdRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

}
