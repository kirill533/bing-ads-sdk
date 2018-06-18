<?php

namespace PMG\BingAds\AdInsight;

class GetHistoricalKeywordPerformanceResponse
{

    /**
     * @var ArrayOfKeywordHistoricalPerformance $KeywordHistoricalPerformances
     */
    protected $KeywordHistoricalPerformances = null;

    /**
     * @param ArrayOfKeywordHistoricalPerformance $KeywordHistoricalPerformances
     */
    public function __construct($KeywordHistoricalPerformances)
    {
      $this->KeywordHistoricalPerformances = $KeywordHistoricalPerformances;
    }

    /**
     * @return ArrayOfKeywordHistoricalPerformance
     */
    public function getKeywordHistoricalPerformances()
    {
      return $this->KeywordHistoricalPerformances;
    }

    /**
     * @param ArrayOfKeywordHistoricalPerformance $KeywordHistoricalPerformances
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceResponse
     */
    public function setKeywordHistoricalPerformances($KeywordHistoricalPerformances)
    {
      $this->KeywordHistoricalPerformances = $KeywordHistoricalPerformances;
      return $this;
    }

}
