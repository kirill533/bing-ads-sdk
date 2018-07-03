<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByEditorialStatusRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\KeywordEditorialStatus for valid values
     *
     * @var string $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @param int $AdGroupId
     * @param string $EditorialStatus
     */
    public function __construct($AdGroupId = null, $EditorialStatus = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param string $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusRequest
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

}
