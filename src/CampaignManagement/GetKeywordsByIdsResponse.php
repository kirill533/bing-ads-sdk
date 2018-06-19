<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByIdsResponse
{

    /**
     * @var ArrayOfKeyword $Keywords
     */
    protected $Keywords = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfKeyword $Keywords
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Keywords = null, $PartialErrors = null)
    {
      $this->Keywords = $Keywords;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfKeyword
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfKeyword $Keywords
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsResponse
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
