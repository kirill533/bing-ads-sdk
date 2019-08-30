<?php

namespace PMG\BingAds\AdInsight;

class GetBidLandscapeByKeywordIdsRequest
{

    /**
     * @var ArrayOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @var boolean $IncludeCurrentBid
     */
    protected $IncludeCurrentBid = null;

    /**
     * @param ArrayOflong $KeywordIds
     * @param boolean $IncludeCurrentBid
     */
    public function __construct($KeywordIds = null, $IncludeCurrentBid = null)
    {
    $this->KeywordIds = $KeywordIds;
    $this->IncludeCurrentBid = $IncludeCurrentBid;
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
     * @return \PMG\BingAds\AdInsight\GetBidLandscapeByKeywordIdsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
        $this->KeywordIds = $KeywordIds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCurrentBid()
    {
        return $this->IncludeCurrentBid;
    }

    /**
     * @param boolean $IncludeCurrentBid
     * @return \PMG\BingAds\AdInsight\GetBidLandscapeByKeywordIdsRequest
     */
    public function setIncludeCurrentBid($IncludeCurrentBid)
    {
        $this->IncludeCurrentBid = $IncludeCurrentBid;
        return $this;
    }

}
