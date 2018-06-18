<?php

namespace PMG\BingAds\AdInsight;

class GetHistoricalSearchCountResponse
{

    /**
     * @var ArrayOfKeywordSearchCount $KeywordSearchCounts
     */
    protected $KeywordSearchCounts = null;

    /**
     * @param ArrayOfKeywordSearchCount $KeywordSearchCounts
     */
    public function __construct($KeywordSearchCounts)
    {
      $this->KeywordSearchCounts = $KeywordSearchCounts;
    }

    /**
     * @return ArrayOfKeywordSearchCount
     */
    public function getKeywordSearchCounts()
    {
      return $this->KeywordSearchCounts;
    }

    /**
     * @param ArrayOfKeywordSearchCount $KeywordSearchCounts
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountResponse
     */
    public function setKeywordSearchCounts($KeywordSearchCounts)
    {
      $this->KeywordSearchCounts = $KeywordSearchCounts;
      return $this;
    }

}
