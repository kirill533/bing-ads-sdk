<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedPositionByKeywordsResponse
{

    /**
     * @var ArrayOfKeywordEstimatedPosition $KeywordEstimatedPositions
     */
    protected $KeywordEstimatedPositions = null;

    /**
     * @param ArrayOfKeywordEstimatedPosition $KeywordEstimatedPositions
     */
    public function __construct($KeywordEstimatedPositions)
    {
      $this->KeywordEstimatedPositions = $KeywordEstimatedPositions;
    }

    /**
     * @return ArrayOfKeywordEstimatedPosition
     */
    public function getKeywordEstimatedPositions()
    {
      return $this->KeywordEstimatedPositions;
    }

    /**
     * @param ArrayOfKeywordEstimatedPosition $KeywordEstimatedPositions
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsResponse
     */
    public function setKeywordEstimatedPositions($KeywordEstimatedPositions)
    {
      $this->KeywordEstimatedPositions = $KeywordEstimatedPositions;
      return $this;
    }

}
