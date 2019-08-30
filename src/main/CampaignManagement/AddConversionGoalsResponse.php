<?php

namespace PMG\BingAds\CampaignManagement;

class AddConversionGoalsResponse
{

    /**
     * @var ArrayOfNullableOflong $ConversionGoalIds
     */
    protected $ConversionGoalIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $ConversionGoalIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ConversionGoalIds = null, $PartialErrors = null)
    {
    $this->ConversionGoalIds = $ConversionGoalIds;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getConversionGoalIds()
    {
        return $this->ConversionGoalIds;
    }

    /**
     * @param ArrayOfNullableOflong $ConversionGoalIds
     * @return \PMG\BingAds\CampaignManagement\AddConversionGoalsResponse
     */
    public function setConversionGoalIds($ConversionGoalIds)
    {
        $this->ConversionGoalIds = $ConversionGoalIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddConversionGoalsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
