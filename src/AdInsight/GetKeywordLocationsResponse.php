<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordLocationsResponse
{

    /**
     * @var ArrayOfKeywordLocationResult $KeywordLocationResult
     */
    protected $KeywordLocationResult = null;

    /**
     * @param ArrayOfKeywordLocationResult $KeywordLocationResult
     */
    public function __construct($KeywordLocationResult)
    {
      $this->KeywordLocationResult = $KeywordLocationResult;
    }

    /**
     * @return ArrayOfKeywordLocationResult
     */
    public function getKeywordLocationResult()
    {
      return $this->KeywordLocationResult;
    }

    /**
     * @param ArrayOfKeywordLocationResult $KeywordLocationResult
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsResponse
     */
    public function setKeywordLocationResult($KeywordLocationResult)
    {
      $this->KeywordLocationResult = $KeywordLocationResult;
      return $this;
    }

}
