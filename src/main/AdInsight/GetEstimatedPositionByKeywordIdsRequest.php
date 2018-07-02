<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedPositionByKeywordIdsRequest
{

    /**
     * @var ArrayOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @var float $MaxBid
     */
    protected $MaxBid = null;

    /**
     * @param ArrayOflong $KeywordIds
     * @param float $MaxBid
     */
    public function __construct($KeywordIds = null, $MaxBid = null)
    {
      $this->KeywordIds = $KeywordIds;
      $this->MaxBid = $MaxBid;
    }

    /**
     * @return ArrayOflong
     */
    public function getKeywordIds()
    {
      return $this->KeywordIds;
    }

    /**
     * @param ArrayOflong $KeywordIds
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordIdsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
      $this->KeywordIds = $KeywordIds;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxBid()
    {
      return $this->MaxBid;
    }

    /**
     * @param float $MaxBid
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordIdsRequest
     */
    public function setMaxBid($MaxBid)
    {
      $this->MaxBid = $MaxBid;
      return $this;
    }

}
