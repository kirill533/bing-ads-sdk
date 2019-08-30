<?php

namespace PMG\BingAds\CampaignManagement;

class AddCampaignCriterionsResponse
{

    /**
     * @var ArrayOfNullableOflong $CampaignCriterionIds
     */
    protected $CampaignCriterionIds = null;

    /**
     * @var boolean $IsMigrated
     */
    protected $IsMigrated = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $CampaignCriterionIds
     * @param boolean $IsMigrated
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($CampaignCriterionIds = null, $IsMigrated = null, $NestedPartialErrors = null)
    {
    $this->CampaignCriterionIds = $CampaignCriterionIds;
    $this->IsMigrated = $IsMigrated;
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
     * @return boolean
     */
    public function getIsMigrated()
    {
        return $this->IsMigrated;
    }

    /**
     * @param boolean $IsMigrated
     * @return \PMG\BingAds\CampaignManagement\AddCampaignCriterionsResponse
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
     * @return \PMG\BingAds\CampaignManagement\AddCampaignCriterionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
        $this->NestedPartialErrors = $NestedPartialErrors;
        return $this;
    }

}
