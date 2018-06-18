<?php

namespace PMG\BingAds\AdInsight;

class AdGroupBidLandscape
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var AdGroupBidLandscapeType $AdGroupBidLandscapeType
     */
    protected $AdGroupBidLandscapeType = null;

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
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscape
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return AdGroupBidLandscapeType
     */
    public function getAdGroupBidLandscapeType()
    {
      return $this->AdGroupBidLandscapeType;
    }

    /**
     * @param AdGroupBidLandscapeType $AdGroupBidLandscapeType
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscape
     */
    public function setAdGroupBidLandscapeType($AdGroupBidLandscapeType)
    {
      $this->AdGroupBidLandscapeType = $AdGroupBidLandscapeType;
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
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscape
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
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscape
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
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscape
     */
    public function setBidLandscapePoints($BidLandscapePoints)
    {
      $this->BidLandscapePoints = $BidLandscapePoints;
      return $this;
    }

}
