<?php

namespace PMG\BingAds\CampaignManagement;

class GetConversionGoalsByTagIdsRequest
{

    /**
     * @var ArrayOflong $TagIds
     */
    protected $TagIds = null;

    /**
     * @var ConversionGoalType $ConversionGoalTypes
     */
    protected $ConversionGoalTypes = null;

    /**
     * @var ConversionGoalAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param ArrayOflong $TagIds
     * @param ConversionGoalType $ConversionGoalTypes
     * @param ConversionGoalAdditionalField $ReturnAdditionalFields
     */
    public function __construct($TagIds = null, $ConversionGoalTypes = null, $ReturnAdditionalFields = null)
    {
    $this->TagIds = $TagIds;
    $this->ConversionGoalTypes = $ConversionGoalTypes;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return ArrayOflong
     */
    public function getTagIds()
    {
        return $this->TagIds;
    }

    /**
     * @param ArrayOflong $TagIds
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByTagIdsRequest
     */
    public function setTagIds($TagIds)
    {
        $this->TagIds = $TagIds;
        return $this;
    }

    /**
     * @return ConversionGoalType
     */
    public function getConversionGoalTypes()
    {
        return $this->ConversionGoalTypes;
    }

    /**
     * @param ConversionGoalType $ConversionGoalTypes
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByTagIdsRequest
     */
    public function setConversionGoalTypes($ConversionGoalTypes)
    {
        $this->ConversionGoalTypes = $ConversionGoalTypes;
        return $this;
    }

    /**
     * @return ConversionGoalAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param ConversionGoalAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByTagIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
