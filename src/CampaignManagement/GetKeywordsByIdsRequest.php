<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByIdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOflong $KeywordIds
     */
    public function __construct($AdGroupId = null, $KeywordIds = null)
    {
      $this->AdGroupId = $AdGroupId;
      $this->KeywordIds = $KeywordIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getKeywordIds()
    {
      return $this->KeywordIds;
    }

    /**
     * @param ArrayOflong $KeywordIds
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
      $this->KeywordIds = $KeywordIds;
      return $this;
    }

}
