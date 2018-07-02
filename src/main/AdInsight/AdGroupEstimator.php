<?php

namespace PMG\BingAds\AdInsight;

class AdGroupEstimator
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfKeywordEstimator $KeywordEstimators
     */
    protected $KeywordEstimators = null;

    /**
     * @var float $MaxCpc
     */
    protected $MaxCpc = null;

    
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
     * @return \PMG\BingAds\AdInsight\AdGroupEstimator
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return ArrayOfKeywordEstimator
     */
    public function getKeywordEstimators()
    {
      return $this->KeywordEstimators;
    }

    /**
     * @param ArrayOfKeywordEstimator $KeywordEstimators
     * @return \PMG\BingAds\AdInsight\AdGroupEstimator
     */
    public function setKeywordEstimators($KeywordEstimators)
    {
      $this->KeywordEstimators = $KeywordEstimators;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxCpc()
    {
      return $this->MaxCpc;
    }

    /**
     * @param float $MaxCpc
     * @return \PMG\BingAds\AdInsight\AdGroupEstimator
     */
    public function setMaxCpc($MaxCpc)
    {
      $this->MaxCpc = $MaxCpc;
      return $this;
    }

}
