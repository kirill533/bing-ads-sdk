<?php

namespace PMG\BingAds\AdInsight;

class KeywordIdea
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var string $AdGroupName
     */
    protected $AdGroupName = null;

    /**
     * @var float $AdImpressionShare
     */
    protected $AdImpressionShare = null;

    /**
     * @see \PMG\BingAds\AdInsight\CompetitionLevel for valid values
     *
     * @var string $Competition
     */
    protected $Competition = null;

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOflong $MonthlySearchCounts
     */
    protected $MonthlySearchCounts = null;

    /**
     * @var float $Relevance
     */
    protected $Relevance = null;

    /**
     * @see \PMG\BingAds\AdInsight\SourceType for valid values
     *
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var float $SuggestedBid
     */
    protected $SuggestedBid = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupName()
    {
      return $this->AdGroupName;
    }

    /**
     * @param string $AdGroupName
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setAdGroupName($AdGroupName)
    {
      $this->AdGroupName = $AdGroupName;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdImpressionShare()
    {
      return $this->AdImpressionShare;
    }

    /**
     * @param float $AdImpressionShare
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setAdImpressionShare($AdImpressionShare)
    {
      $this->AdImpressionShare = $AdImpressionShare;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompetition()
    {
      return $this->Competition;
    }

    /**
     * @param string $Competition
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setCompetition($Competition)
    {
      $this->Competition = $Competition;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param string $Keyword
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getMonthlySearchCounts()
    {
      return $this->MonthlySearchCounts;
    }

    /**
     * @param ArrayOflong $MonthlySearchCounts
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setMonthlySearchCounts($MonthlySearchCounts)
    {
      $this->MonthlySearchCounts = $MonthlySearchCounts;
      return $this;
    }

    /**
     * @return float
     */
    public function getRelevance()
    {
      return $this->Relevance;
    }

    /**
     * @param float $Relevance
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setRelevance($Relevance)
    {
      $this->Relevance = $Relevance;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return float
     */
    public function getSuggestedBid()
    {
      return $this->SuggestedBid;
    }

    /**
     * @param float $SuggestedBid
     * @return \PMG\BingAds\AdInsight\KeywordIdea
     */
    public function setSuggestedBid($SuggestedBid)
    {
      $this->SuggestedBid = $SuggestedBid;
      return $this;
    }

}
