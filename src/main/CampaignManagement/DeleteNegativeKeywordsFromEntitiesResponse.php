<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteNegativeKeywordsFromEntitiesResponse
{

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($NestedPartialErrors = null)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteNegativeKeywordsFromEntitiesResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
