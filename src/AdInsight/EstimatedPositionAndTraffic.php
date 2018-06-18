<?php

namespace PMG\BingAds\AdInsight;

class EstimatedPositionAndTraffic
{

    /**
     * @var MatchType $MatchType
     */
    protected $MatchType = null;

    /**
     * @var float $MinClicksPerWeek
     */
    protected $MinClicksPerWeek = null;

    /**
     * @var float $MaxClicksPerWeek
     */
    protected $MaxClicksPerWeek = null;

    /**
     * @var float $AverageCPC
     */
    protected $AverageCPC = null;

    /**
     * @var int $MinImpressionsPerWeek
     */
    protected $MinImpressionsPerWeek = null;

    /**
     * @var int $MaxImpressionsPerWeek
     */
    protected $MaxImpressionsPerWeek = null;

    /**
     * @var float $CTR
     */
    protected $CTR = null;

    /**
     * @var float $MinTotalCostPerWeek
     */
    protected $MinTotalCostPerWeek = null;

    /**
     * @var float $MaxTotalCostPerWeek
     */
    protected $MaxTotalCostPerWeek = null;

    /**
     * @var CurrencyCode $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $EstimatedAdPosition
     */
    protected $EstimatedAdPosition = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMatchType($MatchType)
    {
      $this->MatchType = $MatchType;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinClicksPerWeek()
    {
      return $this->MinClicksPerWeek;
    }

    /**
     * @param float $MinClicksPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMinClicksPerWeek($MinClicksPerWeek)
    {
      $this->MinClicksPerWeek = $MinClicksPerWeek;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxClicksPerWeek()
    {
      return $this->MaxClicksPerWeek;
    }

    /**
     * @param float $MaxClicksPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMaxClicksPerWeek($MaxClicksPerWeek)
    {
      $this->MaxClicksPerWeek = $MaxClicksPerWeek;
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
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setAverageCPC($AverageCPC)
    {
      $this->AverageCPC = $AverageCPC;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinImpressionsPerWeek()
    {
      return $this->MinImpressionsPerWeek;
    }

    /**
     * @param int $MinImpressionsPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMinImpressionsPerWeek($MinImpressionsPerWeek)
    {
      $this->MinImpressionsPerWeek = $MinImpressionsPerWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxImpressionsPerWeek()
    {
      return $this->MaxImpressionsPerWeek;
    }

    /**
     * @param int $MaxImpressionsPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMaxImpressionsPerWeek($MaxImpressionsPerWeek)
    {
      $this->MaxImpressionsPerWeek = $MaxImpressionsPerWeek;
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
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setCTR($CTR)
    {
      $this->CTR = $CTR;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinTotalCostPerWeek()
    {
      return $this->MinTotalCostPerWeek;
    }

    /**
     * @param float $MinTotalCostPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMinTotalCostPerWeek($MinTotalCostPerWeek)
    {
      $this->MinTotalCostPerWeek = $MinTotalCostPerWeek;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxTotalCostPerWeek()
    {
      return $this->MaxTotalCostPerWeek;
    }

    /**
     * @param float $MaxTotalCostPerWeek
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setMaxTotalCostPerWeek($MaxTotalCostPerWeek)
    {
      $this->MaxTotalCostPerWeek = $MaxTotalCostPerWeek;
      return $this;
    }

    /**
     * @return CurrencyCode
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param CurrencyCode $CurrencyCode
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedAdPosition()
    {
      return $this->EstimatedAdPosition;
    }

    /**
     * @param float $EstimatedAdPosition
     * @return \PMG\BingAds\AdInsight\EstimatedPositionAndTraffic
     */
    public function setEstimatedAdPosition($EstimatedAdPosition)
    {
      $this->EstimatedAdPosition = $EstimatedAdPosition;
      return $this;
    }

}
