<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdGroupCriterionsResponse
{

    /**
     * @var ArrayOfNullableOflong $AdGroupCriterionIds
     */
    protected $AdGroupCriterionIds = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AdGroupCriterionIds
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($AdGroupCriterionIds = null, $NestedPartialErrors = null)
    {
    $this->AdGroupCriterionIds = $AdGroupCriterionIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupCriterionsResponse
     */
    public function setAdGroupCriterionIds($AdGroupCriterionIds)
    {
        $this->AdGroupCriterionIds = $AdGroupCriterionIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
        $this->NestedPartialErrors = $NestedPartialErrors;
        return $this;
    }

}
