<?php

namespace PMG\BingAds\CampaignManagement;

class GetConversionGoalsByIdsResponse
{

    /**
     * @var ArrayOfConversionGoal $ConversionGoals
     */
    protected $ConversionGoals = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfConversionGoal $ConversionGoals
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ConversionGoals = null, $PartialErrors = null)
    {
    $this->ConversionGoals = $ConversionGoals;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfConversionGoal
     */
    public function getConversionGoals()
    {
        return $this->ConversionGoals;
    }

    /**
     * @param ArrayOfConversionGoal $ConversionGoals
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsResponse
     */
    public function setConversionGoals($ConversionGoals)
    {
        $this->ConversionGoals = $ConversionGoals;
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
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
