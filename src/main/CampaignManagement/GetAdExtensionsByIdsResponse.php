<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionsByIdsResponse
{

    /**
     * @var ArrayOfAdExtension $AdExtensions
     */
    protected $AdExtensions = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdExtension $AdExtensions
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdExtensions = null, $PartialErrors = null)
    {
      $this->AdExtensions = $AdExtensions;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAdExtension
     */
    public function getAdExtensions()
    {
      return $this->AdExtensions;
    }

    /**
     * @param ArrayOfAdExtension $AdExtensions
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsByIdsResponse
     */
    public function setAdExtensions($AdExtensions)
    {
      $this->AdExtensions = $AdExtensions;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
