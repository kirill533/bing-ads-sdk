<?php

namespace PMG\BingAds\AdInsight;

class KeywordOpportunity extends Opportunity
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
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var string $CampaignName
     */
    protected $CampaignName = null;

    /**
     * @var float $Competition
     */
    protected $Competition = null;

    /**
     * @var float $EstimatedIncreaseInClicks
     */
    protected $EstimatedIncreaseInClicks = null;

    /**
     * @var float $EstimatedIncreaseInCost
     */
    protected $EstimatedIncreaseInCost = null;

    /**
     * @var int $EstimatedIncreaseInImpressions
     */
    protected $EstimatedIncreaseInImpressions = null;

    /**
     * @var int $MatchType
     */
    protected $MatchType = null;

    /**
     * @var int $MonthlySearches
     */
    protected $MonthlySearches = null;

    /**
     * @var float $SuggestedBid
     */
    protected $SuggestedBid = null;

    /**
     * @var string $SuggestedKeyword
     */
    protected $SuggestedKeyword = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
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
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setAdGroupName($AdGroupName)
    {
      $this->AdGroupName = $AdGroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->CampaignName;
    }

    /**
     * @param string $CampaignName
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setCampaignName($CampaignName)
    {
      $this->CampaignName = $CampaignName;
      return $this;
    }

    /**
     * @return float
     */
    public function getCompetition()
    {
      return $this->Competition;
    }

    /**
     * @param float $Competition
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setCompetition($Competition)
    {
      $this->Competition = $Competition;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedIncreaseInClicks()
    {
      return $this->EstimatedIncreaseInClicks;
    }

    /**
     * @param float $EstimatedIncreaseInClicks
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setEstimatedIncreaseInClicks($EstimatedIncreaseInClicks)
    {
      $this->EstimatedIncreaseInClicks = $EstimatedIncreaseInClicks;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedIncreaseInCost()
    {
      return $this->EstimatedIncreaseInCost;
    }

    /**
     * @param float $EstimatedIncreaseInCost
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setEstimatedIncreaseInCost($EstimatedIncreaseInCost)
    {
      $this->EstimatedIncreaseInCost = $EstimatedIncreaseInCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedIncreaseInImpressions()
    {
      return $this->EstimatedIncreaseInImpressions;
    }

    /**
     * @param int $EstimatedIncreaseInImpressions
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setEstimatedIncreaseInImpressions($EstimatedIncreaseInImpressions)
    {
      $this->EstimatedIncreaseInImpressions = $EstimatedIncreaseInImpressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param int $MatchType
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setMatchType($MatchType)
    {
      $this->MatchType = $MatchType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonthlySearches()
    {
      return $this->MonthlySearches;
    }

    /**
     * @param int $MonthlySearches
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setMonthlySearches($MonthlySearches)
    {
      $this->MonthlySearches = $MonthlySearches;
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
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setSuggestedBid($SuggestedBid)
    {
      $this->SuggestedBid = $SuggestedBid;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuggestedKeyword()
    {
      return $this->SuggestedKeyword;
    }

    /**
     * @param string $SuggestedKeyword
     * @return \PMG\BingAds\AdInsight\KeywordOpportunity
     */
    public function setSuggestedKeyword($SuggestedKeyword)
    {
      $this->SuggestedKeyword = $SuggestedKeyword;
      return $this;
    }

}
