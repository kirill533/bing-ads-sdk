<?php

namespace PMG\BingAds\CampaignMangagement;

class AddAdGroupCriterionsResponse
{

    /**
     * @var ArrayOfNullableOflong $AdGroupCriterionIds
     */
    protected $AdGroupCriterionIds = null;

    /**
     * @var boolean $IsMigrated
     */
    protected $IsMigrated = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AdGroupCriterionIds
     * @param boolean $IsMigrated
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($AdGroupCriterionIds, $IsMigrated, $NestedPartialErrors)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
      $this->IsMigrated = $IsMigrated;
      $this->NestedPartialErrors = $NestedPartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getAdGroupCriterionIds()
    {
      return $this->AdGroupCriterionIds;
    }

    /**
     * @param ArrayOfNullableOflong $AdGroupCriterionIds
     * @return \PMG\BingAds\CampaignMangagement\AddAdGroupCriterionsResponse
     */
    public function setAdGroupCriterionIds($AdGroupCriterionIds)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\AddAdGroupCriterionsResponse
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
     * @return \PMG\BingAds\CampaignMangagement\AddAdGroupCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
