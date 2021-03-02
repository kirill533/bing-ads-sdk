<?php

namespace PMG\BingAds\AdInsight;

class AuctionInsightKpi
{

    /**
     * @var ArrayOfstring $Segments
     */
    protected $Segments = null;

    /**
     * @var float $ImpressionShare
     */
    protected $ImpressionShare = null;

    /**
     * @var float $OverlapRate
     */
    protected $OverlapRate = null;

    /**
     * @var float $AveragePosition
     */
    protected $AveragePosition = null;

    /**
     * @var float $AboveRate
     */
    protected $AboveRate = null;

    /**
     * @var float $TopOfPageRate
     */
    protected $TopOfPageRate = null;

    /**
     * @var float $OutrankingShare
     */
    protected $OutrankingShare = null;

    /**
     * @var float $AbsoluteTopOfPageRate
     */
    protected $AbsoluteTopOfPageRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getSegments()
    {
        return $this->Segments;
    }

    /**
     * @param ArrayOfstring $Segments
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setSegments($Segments)
    {
        $this->Segments = $Segments;
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
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setImpressionShare($ImpressionShare)
    {
        $this->ImpressionShare = $ImpressionShare;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverlapRate()
    {
        return $this->OverlapRate;
    }

    /**
     * @param float $OverlapRate
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setOverlapRate($OverlapRate)
    {
        $this->OverlapRate = $OverlapRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAveragePosition()
    {
        return $this->AveragePosition;
    }

    /**
     * @param float $AveragePosition
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setAveragePosition($AveragePosition)
    {
        $this->AveragePosition = $AveragePosition;
        return $this;
    }

    /**
     * @return float
     */
    public function getAboveRate()
    {
        return $this->AboveRate;
    }

    /**
     * @param float $AboveRate
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setAboveRate($AboveRate)
    {
        $this->AboveRate = $AboveRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTopOfPageRate()
    {
        return $this->TopOfPageRate;
    }

    /**
     * @param float $TopOfPageRate
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setTopOfPageRate($TopOfPageRate)
    {
        $this->TopOfPageRate = $TopOfPageRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getOutrankingShare()
    {
        return $this->OutrankingShare;
    }

    /**
     * @param float $OutrankingShare
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setOutrankingShare($OutrankingShare)
    {
        $this->OutrankingShare = $OutrankingShare;
        return $this;
    }

    /**
     * @return float
     */
    public function getAbsoluteTopOfPageRate()
    {
        return $this->AbsoluteTopOfPageRate;
    }

    /**
     * @param float $AbsoluteTopOfPageRate
     * @return \PMG\BingAds\AdInsight\AuctionInsightKpi
     */
    public function setAbsoluteTopOfPageRate($AbsoluteTopOfPageRate)
    {
        $this->AbsoluteTopOfPageRate = $AbsoluteTopOfPageRate;
        return $this;
    }

}
