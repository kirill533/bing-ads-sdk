<?php

namespace PMG\BingAds\CampaignManagement;

class ApplyProductPartitionActionsResponse
{

    /**
     * @var ArrayOfNullableOflong $AdGroupCriterionIds
     */
    protected $AdGroupCriterionIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AdGroupCriterionIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdGroupCriterionIds, $PartialErrors)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\ApplyProductPartitionActionsResponse
     */
    public function setAdGroupCriterionIds($AdGroupCriterionIds)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
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
     * @return \PMG\BingAds\CampaignManagement\ApplyProductPartitionActionsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
