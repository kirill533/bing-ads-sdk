<?php

namespace PMG\BingAds\AdInsight;

class KeywordBidLandscape
{

    /**
     * @var int $KeywordId
     */
    protected $KeywordId = null;

    /**
     * @var DayMonthAndYear $StartDate
     */
    protected $StartDate = null;

    /**
     * @var DayMonthAndYear $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ArrayOfBidLandscapePoint $BidLandscapePoints
     */
    protected $BidLandscapePoints = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getKeywordId()
    {
      return $this->KeywordId;
    }

    /**
     * @param int $KeywordId
     * @return \PMG\BingAds\AdInsight\KeywordBidLandscape
     */
    public function setKeywordId($KeywordId)
    {
      $this->KeywordId = $KeywordId;
      return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param DayMonthAndYear $StartDate
     * @return \PMG\BingAds\AdInsight\KeywordBidLandscape
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param DayMonthAndYear $EndDate
     * @return \PMG\BingAds\AdInsight\KeywordBidLandscape
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return ArrayOfBidLandscapePoint
     */
    public function getBidLandscapePoints()
    {
      return $this->BidLandscapePoints;
    }

    /**
     * @param ArrayOfBidLandscapePoint $BidLandscapePoints
     * @return \PMG\BingAds\AdInsight\KeywordBidLandscape
     */
    public function setBidLandscapePoints($BidLandscapePoints)
    {
      $this->BidLandscapePoints = $BidLandscapePoints;
      return $this;
    }

}
