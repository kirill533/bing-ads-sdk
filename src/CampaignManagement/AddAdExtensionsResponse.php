<?php

namespace PMG\BingAds\CampaignMangagement;

class AddAdExtensionsResponse
{

    /**
     * @var ArrayOfAdExtensionIdentity $AdExtensionIdentities
     */
    protected $AdExtensionIdentities = null;

    /**
     * @var ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    protected $NestedPartialErrors = null;

    /**
     * @param ArrayOfAdExtensionIdentity $AdExtensionIdentities
     * @param ArrayOfBatchErrorCollection $NestedPartialErrors
     */
    public function __construct($AdExtensionIdentities, $NestedPartialErrors)
    {
      $this->AdExtensionIdentities = $AdExtensionIdentities;
      $this->NestedPartialErrors = $NestedPartialErrors;
    }

    /**
     * @return ArrayOfAdExtensionIdentity
     */
    public function getAdExtensionIdentities()
    {
      return $this->AdExtensionIdentities;
    }

    /**
     * @param ArrayOfAdExtensionIdentity $AdExtensionIdentities
     * @return \PMG\BingAds\CampaignMangagement\AddAdExtensionsResponse
     */
    public function setAdExtensionIdentities($AdExtensionIdentities)
    {
      $this->AdExtensionIdentities = $AdExtensionIdentities;
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
     * @return \PMG\BingAds\CampaignMangagement\AddAdExtensionsResponse
     */
    public function setNestedPartialErrors($NestedPartialErrors)
    {
      $this->NestedPartialErrors = $NestedPartialErrors;
      return $this;
    }

}
