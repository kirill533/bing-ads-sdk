<?php

namespace PMG\BingAds\CampaignManagement;

class TargetImpressionShareBiddingScheme extends BiddingScheme
{

    /**
     * @var Bid $MaxCpc
     */
    protected $MaxCpc = null;

    /**
     * @var string $TargetAdPosition
     */
    protected $TargetAdPosition = null;

    /**
     * @var float $TargetImpressionShare
     */
    protected $TargetImpressionShare = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Bid
     */
    public function getMaxCpc()
    {
        return $this->MaxCpc;
    }

    /**
     * @param Bid $MaxCpc
     * @return \PMG\BingAds\CampaignManagement\TargetImpressionShareBiddingScheme
     */
    public function setMaxCpc($MaxCpc)
    {
        $this->MaxCpc = $MaxCpc;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetAdPosition()
    {
        return $this->TargetAdPosition;
    }

    /**
     * @param string $TargetAdPosition
     * @return \PMG\BingAds\CampaignManagement\TargetImpressionShareBiddingScheme
     */
    public function setTargetAdPosition($TargetAdPosition)
    {
        $this->TargetAdPosition = $TargetAdPosition;
        return $this;
    }

    /**
     * @return float
     */
    public function getTargetImpressionShare()
    {
        return $this->TargetImpressionShare;
    }

    /**
     * @param float $TargetImpressionShare
     * @return \PMG\BingAds\CampaignManagement\TargetImpressionShareBiddingScheme
     */
    public function setTargetImpressionShare($TargetImpressionShare)
    {
        $this->TargetImpressionShare = $TargetImpressionShare;
        return $this;
    }

}
