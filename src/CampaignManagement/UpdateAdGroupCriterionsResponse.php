<?php

namespace PMG\BingAds\CampaignMangagement;

class UpdateAdGroupCriterionsResponse
{

    /**
     * @var boolean $IsMigrated
     */
    protected $IsMigrated = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param boolean $IsMigrated
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($IsMigrated, $NestedPartialErrors)
    {
      $this->IsMigrated = $IsMigrated;
      $this->NestedPartialErrors = $NestedPartialErrors;
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
     * @return \PMG\BingAds\CampaignMangagement\UpdateAdGroupCriterionsResponse
     */
    public function setIsMigrated($IsMigrated)
    {
      $this->IsMigrated = $IsMigrated;
      return $this;
    }

    /**
     * @return ArrayOfBatchErrorCollection
     */
    public function getNestedPartialErrors()
    {
      return $this->NestedPartialErrors;
    }

    /**
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     * @return \PMG\BingAds\CampaignMangagement\UpdateAdGroupCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
