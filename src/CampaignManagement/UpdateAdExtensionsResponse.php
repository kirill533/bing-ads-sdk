<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateAdExtensionsResponse
{

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($NestedPartialErrors)
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
     * @return \PMG\BingAds\CampaignManagement\UpdateAdExtensionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
