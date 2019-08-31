<?php

namespace PMG\BingAds\AdInsight;

class KeywordEstimatedPosition
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfEstimatedPositionAndTraffic $EstimatedPositions
     */
    protected $EstimatedPositions = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\AdInsight\KeywordEstimatedPosition
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * @return ArrayOfEstimatedPositionAndTraffic
     */
    public function getEstimatedPositions()
    {
        return $this->EstimatedPositions;
    }

    /**
     * @param ArrayOfEstimatedPositionAndTraffic $EstimatedPositions
     * @return \PMG\BingAds\AdInsight\KeywordEstimatedPosition
     */
    public function setEstimatedPositions($EstimatedPositions)
    {
        $this->EstimatedPositions = $EstimatedPositions;
        return $this;
    }

}
