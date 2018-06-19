<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteKeywordsRequest
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
    public function __construct($AdGroupId, $KeywordIds)
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
     * @return \PMG\BingAds\CampaignManagement\DeleteKeywordsRequest
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
     * @return \PMG\BingAds\CampaignManagement\DeleteKeywordsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
      $this->KeywordIds = $KeywordIds;
      return $this;
    }

}
