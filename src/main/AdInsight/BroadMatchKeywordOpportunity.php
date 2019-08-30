<?php

namespace PMG\BingAds\AdInsight;

class BroadMatchKeywordOpportunity extends KeywordOpportunity
{

    /**
     * @var float $AverageCPC
     */
    protected $AverageCPC = null;

    /**
     * @var float $AverageCTR
     */
    protected $AverageCTR = null;

    /**
     * @var float $ClickShare
     */
    protected $ClickShare = null;

    /**
     * @var float $ImpressionShare
     */
    protected $ImpressionShare = null;

    /**
     * @var float $ReferenceKeywordBid
     */
    protected $ReferenceKeywordBid = null;

    /**
     * @var int $ReferenceKeywordId
     */
    protected $ReferenceKeywordId = null;

    /**
     * @var int $ReferenceKeywordMatchType
     */
    protected $ReferenceKeywordMatchType = null;

    /**
     * @var ArrayOfBroadMatchSearchQueryKPI $SearchQueryKPIs
     */
    protected $SearchQueryKPIs = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return float
     */
    public function getAverageCPC()
    {
        return $this->AverageCPC;
    }

    /**
     * @param float $AverageCPC
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setAverageCPC($AverageCPC)
    {
        $this->AverageCPC = $AverageCPC;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageCTR()
    {
        return $this->AverageCTR;
    }

    /**
     * @param float $AverageCTR
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setAverageCTR($AverageCTR)
    {
        $this->AverageCTR = $AverageCTR;
        return $this;
    }

    /**
     * @return float
     */
    public function getClickShare()
    {
        return $this->ClickShare;
    }

    /**
     * @param float $ClickShare
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setClickShare($ClickShare)
    {
        $this->ClickShare = $ClickShare;
        return $this;
    }

    /**
     * @return float
     */
    public function getImpressionShare()
    {
        return $this->ImpressionShare;
    }

    /**
     * @param float $ImpressionShare
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setImpressionShare($ImpressionShare)
    {
        $this->ImpressionShare = $ImpressionShare;
        return $this;
    }

    /**
     * @return float
     */
    public function getReferenceKeywordBid()
    {
        return $this->ReferenceKeywordBid;
    }

    /**
     * @param float $ReferenceKeywordBid
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setReferenceKeywordBid($ReferenceKeywordBid)
    {
        $this->ReferenceKeywordBid = $ReferenceKeywordBid;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceKeywordId()
    {
        return $this->ReferenceKeywordId;
    }

    /**
     * @param int $ReferenceKeywordId
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setReferenceKeywordId($ReferenceKeywordId)
    {
        $this->ReferenceKeywordId = $ReferenceKeywordId;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenceKeywordMatchType()
    {
        return $this->ReferenceKeywordMatchType;
    }

    /**
     * @param int $ReferenceKeywordMatchType
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setReferenceKeywordMatchType($ReferenceKeywordMatchType)
    {
        $this->ReferenceKeywordMatchType = $ReferenceKeywordMatchType;
        return $this;
    }

    /**
     * @return ArrayOfBroadMatchSearchQueryKPI
     */
    public function getSearchQueryKPIs()
    {
        return $this->SearchQueryKPIs;
    }

    /**
     * @param ArrayOfBroadMatchSearchQueryKPI $SearchQueryKPIs
     * @return \PMG\BingAds\AdInsight\BroadMatchKeywordOpportunity
     */
    public function setSearchQueryKPIs($SearchQueryKPIs)
    {
        $this->SearchQueryKPIs = $SearchQueryKPIs;
        return $this;
    }

}
