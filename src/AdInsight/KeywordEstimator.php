<?php

namespace PMG\BingAds\AdInsight;

class KeywordEstimator
{

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @var float $MaxCpc
     */
    protected $MaxCpc = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword $Keyword
     * @return \PMG\BingAds\AdInsight\KeywordEstimator
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
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
     * @return \PMG\BingAds\AdInsight\KeywordEstimator
     */
    public function setMaxCpc($MaxCpc)
    {
      $this->MaxCpc = $MaxCpc;
      return $this;
    }

}
