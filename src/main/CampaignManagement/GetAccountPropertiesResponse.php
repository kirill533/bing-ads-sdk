<?php

namespace PMG\BingAds\CampaignManagement;

class GetAccountPropertiesResponse
{

    /**
     * @var ArrayOfAccountProperty $AccountProperties
     */
    protected $AccountProperties = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAccountProperty $AccountProperties
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AccountProperties = null, $PartialErrors = null)
    {
      $this->AccountProperties = $AccountProperties;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAccountProperty
     */
    public function getAccountProperties()
    {
      return $this->AccountProperties;
    }

    /**
     * @param ArrayOfAccountProperty $AccountProperties
     * @return \PMG\BingAds\CampaignManagement\GetAccountPropertiesResponse
     */
    public function setAccountProperties($AccountProperties)
    {
      $this->AccountProperties = $AccountProperties;
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
     * @return \PMG\BingAds\CampaignManagement\GetAccountPropertiesResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
