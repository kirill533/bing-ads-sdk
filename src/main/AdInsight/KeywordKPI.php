<?php

namespace PMG\BingAds\AdInsight;

class KeywordKPI
{

    /**
     * @var string $Device
     */
    protected $Device = null;

    /**
     * @var MatchType $MatchType
     */
    protected $MatchType = null;

    /**
     * @var AdPosition $AdPosition
     */
    protected $AdPosition = null;

    /**
     * @var int $Clicks
     */
    protected $Clicks = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var float $AverageCPC
     */
    protected $AverageCPC = null;

    /**
     * @var float $CTR
     */
    protected $CTR = null;

    /**
     * @var float $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var float $AverageBid
     */
    protected $AverageBid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param string $Device
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return MatchType
     */
    public function getMatchType()
    {
        return $this->MatchType;
    }

    /**
     * @param MatchType $MatchType
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setMatchType($MatchType)
    {
        $this->MatchType = $MatchType;
        return $this;
    }

    /**
     * @return AdPosition
     */
    public function getAdPosition()
    {
        return $this->AdPosition;
    }

    /**
     * @param AdPosition $AdPosition
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setAdPosition($AdPosition)
    {
        $this->AdPosition = $AdPosition;
        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
        return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setImpressions($Impressions)
    {
        $this->Impressions = $Impressions;
        return $this;
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
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setAverageCPC($AverageCPC)
    {
        $this->AverageCPC = $AverageCPC;
        return $this;
    }

    /**
     * @return float
     */
    public function getCTR()
    {
        return $this->CTR;
    }

    /**
     * @param float $CTR
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setCTR($CTR)
    {
        $this->CTR = $CTR;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCost()
    {
        return $this->TotalCost;
    }

    /**
     * @param float $TotalCost
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setTotalCost($TotalCost)
    {
        $this->TotalCost = $TotalCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageBid()
    {
        return $this->AverageBid;
    }

    /**
     * @param float $AverageBid
     * @return \PMG\BingAds\AdInsight\KeywordKPI
     */
    public function setAverageBid($AverageBid)
    {
        $this->AverageBid = $AverageBid;
        return $this;
    }

}
