<?php

namespace PMG\BingAds\CampaignManagement;

class AddNegativeKeywordsToEntitiesResponse
{

    /**
     * @var ArrayOfIdCollection $NegativeKeywordIds
     */
    protected $NegativeKeywordIds = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfIdCollection $NegativeKeywordIds
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($NegativeKeywordIds = null, $NestedPartialErrors = null)
    {
      $this->NegativeKeywordIds = $NegativeKeywordIds;
      $this->NestedPartialErrors = $NestedPartialErrors;
    }

    /**
     * @return ArrayOfIdCollection
     */
    public function getNegativeKeywordIds()
    {
      return $this->NegativeKeywordIds;
    }

    /**
     * @param ArrayOfIdCollection $NegativeKeywordIds
     * @return \PMG\BingAds\CampaignManagement\AddNegativeKeywordsToEntitiesResponse
     */
    public function setNegativeKeywordIds($NegativeKeywordIds)
    {
      $this->NegativeKeywordIds = $NegativeKeywordIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddNegativeKeywordsToEntitiesResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
