<?php

namespace PMG\BingAds\CampaignManagement;

class EditorialReasonCollection
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var int $AdOrKeywordId
     */
    protected $AdOrKeywordId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AppealStatus for valid values
     *
     * @var string $AppealStatus
     */
    protected $AppealStatus = null;

    /**
     * @var ArrayOfEditorialReason $Reasons
     */
    protected $Reasons = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignManagement\EditorialReasonCollection
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdOrKeywordId()
    {
      return $this->AdOrKeywordId;
    }

    /**
     * @param int $AdOrKeywordId
     * @return \PMG\BingAds\CampaignManagement\EditorialReasonCollection
     */
    public function setAdOrKeywordId($AdOrKeywordId)
    {
      $this->AdOrKeywordId = $AdOrKeywordId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppealStatus()
    {
      return $this->AppealStatus;
    }

    /**
     * @param string $AppealStatus
     * @return \PMG\BingAds\CampaignManagement\EditorialReasonCollection
     */
    public function setAppealStatus($AppealStatus)
    {
      $this->AppealStatus = $AppealStatus;
      return $this;
    }

    /**
     * @return ArrayOfEditorialReason
     */
    public function getReasons()
    {
      return $this->Reasons;
    }

    /**
     * @param ArrayOfEditorialReason $Reasons
     * @return \PMG\BingAds\CampaignManagement\EditorialReasonCollection
     */
    public function setReasons($Reasons)
    {
      $this->Reasons = $Reasons;
      return $this;
    }

}
