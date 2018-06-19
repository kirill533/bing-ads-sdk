<?php

namespace PMG\BingAds\CampaignManagement;

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
    public function __construct($IsMigrated = null, $NestedPartialErrors = null)
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
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupCriterionsResponse
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
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
