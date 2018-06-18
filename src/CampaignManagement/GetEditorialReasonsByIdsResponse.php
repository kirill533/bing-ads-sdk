<?php

namespace PMG\BingAds\CampaignMangagement;

class GetEditorialReasonsByIdsResponse
{

    /**
     * @var ArrayOfEditorialReasonCollection $EditorialReasons
     */
    protected $EditorialReasons = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfEditorialReasonCollection $EditorialReasons
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($EditorialReasons, $PartialErrors)
    {
      $this->EditorialReasons = $EditorialReasons;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfEditorialReasonCollection
     */
    public function getEditorialReasons()
    {
      return $this->EditorialReasons;
    }

    /**
     * @param ArrayOfEditorialReasonCollection $EditorialReasons
     * @return \PMG\BingAds\CampaignMangagement\GetEditorialReasonsByIdsResponse
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
     * @return \PMG\BingAds\CampaignMangagement\GetEditorialReasonsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
