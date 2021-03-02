<?php

namespace PMG\BingAds\CampaignManagement;

class GetConversionGoalsByIdsRequest
{

    /**
     * @var ArrayOflong $ConversionGoalIds
     */
    protected $ConversionGoalIds = null;

    /**
     * @var ConversionGoalType $ConversionGoalTypes
     */
    protected $ConversionGoalTypes = null;

    /**
     * @var ConversionGoalAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param ArrayOflong $ConversionGoalIds
     * @param ConversionGoalType $ConversionGoalTypes
     * @param ConversionGoalAdditionalField $ReturnAdditionalFields
     */
    public function __construct($ConversionGoalIds = null, $ConversionGoalTypes = null, $ReturnAdditionalFields = null)
    {
    $this->ConversionGoalIds = $ConversionGoalIds;
    $this->ConversionGoalTypes = $ConversionGoalTypes;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return ArrayOflong
     */
    public function getConversionGoalIds()
    {
        return $this->ConversionGoalIds;
    }

    /**
     * @param ArrayOflong $ConversionGoalIds
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsRequest
     */
    public function setConversionGoalIds($ConversionGoalIds)
    {
        $this->ConversionGoalIds = $ConversionGoalIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
