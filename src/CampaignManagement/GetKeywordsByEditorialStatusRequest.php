<?php

namespace PMG\BingAds\CampaignMangagement;

class GetKeywordsByEditorialStatusRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var KeywordEditorialStatus $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @param int $AdGroupId
     * @param KeywordEditorialStatus $EditorialStatus
     */
    public function __construct($AdGroupId, $EditorialStatus)
    {
      $this->AdGroupId = $AdGroupId;
      $this->EditorialStatus = $EditorialStatus;
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
     * @return \PMG\BingAds\CampaignMangagement\GetKeywordsByEditorialStatusRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return KeywordEditorialStatus
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param KeywordEditorialStatus $EditorialStatus
     * @return \PMG\BingAds\CampaignMangagement\GetKeywordsByEditorialStatusRequest
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

}
