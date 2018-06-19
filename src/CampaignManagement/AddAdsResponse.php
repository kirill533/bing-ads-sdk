<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdsResponse
{

    /**
     * @var ArrayOfNullableOflong $AdIds
     */
    protected $AdIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AdIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdIds, $PartialErrors)
    {
      $this->AdIds = $AdIds;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getAdIds()
    {
      return $this->AdIds;
    }

    /**
     * @param ArrayOfNullableOflong $AdIds
     * @return \PMG\BingAds\CampaignManagement\AddAdsResponse
     */
    public function setAdIds($AdIds)
    {
      $this->AdIds = $AdIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
