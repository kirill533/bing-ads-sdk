<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdExtensionsEditorialReasonsResponse
{

    /**
     * @var ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     */
    protected $EditorialReasons = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($EditorialReasons, $PartialErrors)
    {
      $this->EditorialReasons = $EditorialReasons;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAdExtensionEditorialReasonCollection
     */
    public function getEditorialReasons()
    {
      return $this->EditorialReasons;
    }

    /**
     * @param ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsEditorialReasonsResponse
     */
    public function setEditorialReasons($EditorialReasons)
    {
      $this->EditorialReasons = $EditorialReasons;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsEditorialReasonsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
