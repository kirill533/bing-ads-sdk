<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateKeywordsResponse
{

    /**
     * @var ArrayOfstring $InheritedBidStrategyTypes
     */
    protected $InheritedBidStrategyTypes = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfstring $InheritedBidStrategyTypes
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($InheritedBidStrategyTypes, $PartialErrors)
    {
      $this->InheritedBidStrategyTypes = $InheritedBidStrategyTypes;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\UpdateKeywordsResponse
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
     * @return \PMG\BingAds\CampaignManagement\UpdateKeywordsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
