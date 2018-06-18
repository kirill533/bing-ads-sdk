<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedPositionByKeywordIdsResponse
{

    /**
     * @var ArrayOfKeywordIdEstimatedPosition $KeywordEstimatedPositions
     */
    protected $KeywordEstimatedPositions = null;

    /**
     * @param ArrayOfKeywordIdEstimatedPosition $KeywordEstimatedPositions
     */
    public function __construct($KeywordEstimatedPositions)
    {
      $this->KeywordEstimatedPositions = $KeywordEstimatedPositions;
    }

    /**
     * @return ArrayOfKeywordIdEstimatedPosition
     */
    public function getKeywordEstimatedPositions()
    {
      return $this->KeywordEstimatedPositions;
    }

    /**
     * @param ArrayOfKeywordIdEstimatedPosition $KeywordEstimatedPositions
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordIdsResponse
     */
    public function setKeywordEstimatedPositions($KeywordEstimatedPositions)
    {
      $this->KeywordEstimatedPositions = $KeywordEstimatedPositions;
      return $this;
    }

}
