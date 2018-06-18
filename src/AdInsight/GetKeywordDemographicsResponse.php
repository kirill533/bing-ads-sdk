<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordDemographicsResponse
{

    /**
     * @var ArrayOfKeywordDemographicResult $KeywordDemographicResult
     */
    protected $KeywordDemographicResult = null;

    /**
     * @param ArrayOfKeywordDemographicResult $KeywordDemographicResult
     */
    public function __construct($KeywordDemographicResult)
    {
      $this->KeywordDemographicResult = $KeywordDemographicResult;
    }

    /**
     * @return ArrayOfKeywordDemographicResult
     */
    public function getKeywordDemographicResult()
    {
      return $this->KeywordDemographicResult;
    }

    /**
     * @param ArrayOfKeywordDemographicResult $KeywordDemographicResult
     * @return \PMG\BingAds\AdInsight\GetKeywordDemographicsResponse
     */
    public function setKeywordDemographicResult($KeywordDemographicResult)
    {
      $this->KeywordDemographicResult = $KeywordDemographicResult;
      return $this;
    }

}
