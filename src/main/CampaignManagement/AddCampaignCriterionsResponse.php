<?php

namespace PMG\BingAds\CampaignManagement;

class AddCampaignCriterionsResponse
{

    /**
     * @var ArrayOfNullableOflong $CampaignCriterionIds
     */
    protected $CampaignCriterionIds = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $CampaignCriterionIds
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($CampaignCriterionIds = null, $NestedPartialErrors = null)
    {
    $this->CampaignCriterionIds = $CampaignCriterionIds;
    $this->NestedPartialErrors = $NestedPartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getCampaignCriterionIds()
    {
        return $this->CampaignCriterionIds;
    }

    /**
     * @param ArrayOfNullableOflong $CampaignCriterionIds
     * @return \PMG\BingAds\CampaignManagement\AddCampaignCriterionsResponse
     */
    public function setCampaignCriterionIds($CampaignCriterionIds)
    {
        $this->CampaignCriterionIds = $CampaignCriterionIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddCampaignCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
        $this->NestedPartialErrors = $NestedPartialErrors;
        return $this;
    }

}
