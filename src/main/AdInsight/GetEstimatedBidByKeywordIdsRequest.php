<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedBidByKeywordIdsRequest
{

    /**
     * @var ArrayOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @see \PMG\BingAds\AdInsight\TargetAdPosition for valid values
     *
     * @var string $TargetPositionForAds
     */
    protected $TargetPositionForAds = null;

    /**
     * @param ArrayOflong $KeywordIds
     * @param string $TargetPositionForAds
     */
    public function __construct($KeywordIds = null, $TargetPositionForAds = null)
    {
      $this->KeywordIds = $KeywordIds;
      $this->TargetPositionForAds = $TargetPositionForAds;
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordIdsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
      $this->KeywordIds = $KeywordIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetPositionForAds()
    {
      return $this->TargetPositionForAds;
    }

    /**
     * @param string $TargetPositionForAds
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordIdsRequest
     */
    public function setTargetPositionForAds($TargetPositionForAds)
    {
      $this->TargetPositionForAds = $TargetPositionForAds;
      return $this;
    }

}
