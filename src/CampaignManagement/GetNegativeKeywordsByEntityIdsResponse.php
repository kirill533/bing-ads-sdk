<?php

namespace PMG\BingAds\CampaignMangagement;

class GetNegativeKeywordsByEntityIdsResponse
{

    /**
     * @var ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     */
    protected $EntityNegativeKeywords = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($EntityNegativeKeywords, $PartialErrors)
    {
      $this->EntityNegativeKeywords = $EntityNegativeKeywords;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfEntityNegativeKeyword
     */
    public function getEntityNegativeKeywords()
    {
      return $this->EntityNegativeKeywords;
    }

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     * @return \PMG\BingAds\CampaignMangagement\GetNegativeKeywordsByEntityIdsResponse
     */
    public function setEntityNegativeKeywords($EntityNegativeKeywords)
    {
      $this->EntityNegativeKeywords = $EntityNegativeKeywords;
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
     * @return \PMG\BingAds\CampaignMangagement\GetNegativeKeywordsByEntityIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
