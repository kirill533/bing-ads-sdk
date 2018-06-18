<?php

namespace PMG\BingAds\CampaignMangagement;

class AddKeywordsResponse
{

    /**
     * @var ArrayOfstring $InheritedBidStrategyTypes
     */
    protected $InheritedBidStrategyTypes = null;

    /**
     * @var ArrayOfNullableOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfstring $InheritedBidStrategyTypes
     * @param ArrayOfNullableOflong $KeywordIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($InheritedBidStrategyTypes, $KeywordIds, $PartialErrors)
    {
      $this->InheritedBidStrategyTypes = $InheritedBidStrategyTypes;
      $this->KeywordIds = $KeywordIds;
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
     * @return \PMG\BingAds\CampaignMangagement\AddKeywordsResponse
     */
    public function setInheritedBidStrategyTypes($InheritedBidStrategyTypes)
    {
      $this->InheritedBidStrategyTypes = $InheritedBidStrategyTypes;
      return $this;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getKeywordIds()
    {
      return $this->KeywordIds;
    }

    /**
     * @param ArrayOfNullableOflong $KeywordIds
     * @return \PMG\BingAds\CampaignMangagement\AddKeywordsResponse
     */
    public function setKeywordIds($KeywordIds)
    {
      $this->KeywordIds = $KeywordIds;
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
     * @return \PMG\BingAds\CampaignMangagement\AddKeywordsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
