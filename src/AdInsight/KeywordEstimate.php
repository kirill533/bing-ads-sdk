<?php

namespace PMG\BingAds\AdInsight;

class KeywordEstimate
{

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @var TrafficEstimate $Maximum
     */
    protected $Maximum = null;

    /**
     * @var TrafficEstimate $Minimum
     */
    protected $Minimum = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordEstimate
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return TrafficEstimate
     */
    public function getMaximum()
    {
      return $this->Maximum;
    }

    /**
     * @param TrafficEstimate $Maximum
     * @return \PMG\BingAds\AdInsight\KeywordEstimate
     */
    public function setMaximum($Maximum)
    {
      $this->Maximum = $Maximum;
      return $this;
    }

    /**
     * @return TrafficEstimate
     */
    public function getMinimum()
    {
      return $this->Minimum;
    }

    /**
     * @param TrafficEstimate $Minimum
     * @return \PMG\BingAds\AdInsight\KeywordEstimate
     */
    public function setMinimum($Minimum)
    {
      $this->Minimum = $Minimum;
      return $this;
    }

}
