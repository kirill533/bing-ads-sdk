<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteAdGroupCriterionsResponse
{

    /**
     * @var boolean $IsMigrated
     */
    protected $IsMigrated = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param boolean $IsMigrated
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($IsMigrated, $PartialErrors)
    {
      $this->IsMigrated = $IsMigrated;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return boolean
     */
    public function getIsMigrated()
    {
      return $this->IsMigrated;
    }

    /**
     * @param boolean $IsMigrated
     * @return \PMG\BingAds\CampaignMangagement\DeleteAdGroupCriterionsResponse
     */
    public function setIsMigrated($IsMigrated)
    {
      $this->IsMigrated = $IsMigrated;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignMangagement\DeleteAdGroupCriterionsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
