<?php

namespace PMG\BingAds\AdInsight;

class AuctionInsightResult
{

    /**
     * @var ArrayOfAuctionSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfAuctionInsightEntry $Entries
     */
    protected $Entries = null;

    /**
     * @var float $UsedImpressions
     */
    protected $UsedImpressions = null;

    /**
     * @var float $UsedKeywords
     */
    protected $UsedKeywords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAuctionSegment
     */
    public function getSegments()
    {
        return $this->Segments;
    }

    /**
     * @param ArrayOfAuctionSegment $Segments
     * @return \PMG\BingAds\AdInsight\AuctionInsightResult
     */
    public function setSegments($Segments)
    {
        $this->Segments = $Segments;
        return $this;
    }

    /**
     * @return ArrayOfAuctionInsightEntry
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param ArrayOfAuctionInsightEntry $Entries
     * @return \PMG\BingAds\AdInsight\AuctionInsightResult
     */
    public function setEntries($Entries)
    {
        $this->Entries = $Entries;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsedImpressions()
    {
        return $this->UsedImpressions;
    }

    /**
     * @param float $UsedImpressions
     * @return \PMG\BingAds\AdInsight\AuctionInsightResult
     */
    public function setUsedImpressions($UsedImpressions)
    {
        $this->UsedImpressions = $UsedImpressions;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsedKeywords()
    {
        return $this->UsedKeywords;
    }

    /**
     * @param float $UsedKeywords
     * @return \PMG\BingAds\AdInsight\AuctionInsightResult
     */
    public function setUsedKeywords($UsedKeywords)
    {
        $this->UsedKeywords = $UsedKeywords;
        return $this;
    }

}
