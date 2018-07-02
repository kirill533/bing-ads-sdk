<?php

namespace PMG\BingAds\AdInsight;

class BidOpportunity extends Opportunity
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var float $CurrentBid
     */
    protected $CurrentBid = null;

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
     * @var int $KeywordId
     */
    protected $KeywordId = null;

    /**
     * @var string $MatchType
     */
    protected $MatchType = null;

    /**
     * @var float $SuggestedBid
     */
    protected $SuggestedBid = null;

    
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentBid()
    {
      return $this->CurrentBid;
    }

    /**
     * @param float $CurrentBid
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setCurrentBid($CurrentBid)
    {
      $this->CurrentBid = $CurrentBid;
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setEstimatedIncreaseInImpressions($EstimatedIncreaseInImpressions)
    {
      $this->EstimatedIncreaseInImpressions = $EstimatedIncreaseInImpressions;
      return $this;
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setKeywordId($KeywordId)
    {
      $this->KeywordId = $KeywordId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param string $MatchType
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setMatchType($MatchType)
    {
      $this->MatchType = $MatchType;
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
     * @return \PMG\BingAds\AdInsight\BidOpportunity
     */
    public function setSuggestedBid($SuggestedBid)
    {
      $this->SuggestedBid = $SuggestedBid;
      return $this;
    }

}
