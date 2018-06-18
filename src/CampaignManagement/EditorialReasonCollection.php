<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @var AppealStatus $AppealStatus
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
     * @return \PMG\BingAds\CampaignMangagement\EditorialReasonCollection
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
     * @return \PMG\BingAds\CampaignMangagement\EditorialReasonCollection
     */
    public function setAdOrKeywordId($AdOrKeywordId)
    {
      $this->AdOrKeywordId = $AdOrKeywordId;
      return $this;
    }

    /**
     * @return AppealStatus
     */
    public function getAppealStatus()
    {
      return $this->AppealStatus;
    }

    /**
     * @param AppealStatus $AppealStatus
     * @return \PMG\BingAds\CampaignMangagement\EditorialReasonCollection
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
     * @return \PMG\BingAds\CampaignMangagement\EditorialReasonCollection
     */
    public function setReasons($Reasons)
    {
      $this->Reasons = $Reasons;
      return $this;
    }

}
