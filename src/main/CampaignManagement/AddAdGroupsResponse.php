<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdGroupsResponse
{

    /**
     * @var ArrayOfNullableOflong $AdGroupIds
     */
    protected $AdGroupIds = null;

    /**
     * @var ArrayOfstring $InheritedBidStrategyTypes
     */
    protected $InheritedBidStrategyTypes = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AdGroupIds
     * @param ArrayOfstring $InheritedBidStrategyTypes
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdGroupIds = null, $InheritedBidStrategyTypes = null, $PartialErrors = null)
    {
    $this->AdGroupIds = $AdGroupIds;
    $this->InheritedBidStrategyTypes = $InheritedBidStrategyTypes;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * @param ArrayOfNullableOflong $AdGroupIds
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsResponse
     */
    public function setAdGroupIds($AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getInheritedBidStrategyTypes()
    {
        return $this->InheritedBidStrategyTypes;
    }

    /**
     * @param ArrayOfstring $InheritedBidStrategyTypes
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsResponse
     */
    public function setInheritedBidStrategyTypes($InheritedBidStrategyTypes)
    {
        $this->InheritedBidStrategyTypes = $InheritedBidStrategyTypes;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
