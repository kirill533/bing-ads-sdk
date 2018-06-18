<?php

namespace PMG\BingAds\CampaignMangagement;

class AdExtensionEditorialReasonCollection
{

    /**
     * @var int $AdExtensionId
     */
    protected $AdExtensionId = null;

    /**
     * @var ArrayOfAdExtensionEditorialReason $Reasons
     */
    protected $Reasons = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAdExtensionId()
    {
      return $this->AdExtensionId;
    }

    /**
     * @param int $AdExtensionId
     * @return \PMG\BingAds\CampaignMangagement\AdExtensionEditorialReasonCollection
     */
    public function setAdExtensionId($AdExtensionId)
    {
      $this->AdExtensionId = $AdExtensionId;
      return $this;
    }

    /**
     * @return ArrayOfAdExtensionEditorialReason
     */
    public function getReasons()
    {
      return $this->Reasons;
    }

    /**
     * @param ArrayOfAdExtensionEditorialReason $Reasons
     * @return \PMG\BingAds\CampaignMangagement\AdExtensionEditorialReasonCollection
     */
    public function setReasons($Reasons)
    {
      $this->Reasons = $Reasons;
      return $this;
    }

}
