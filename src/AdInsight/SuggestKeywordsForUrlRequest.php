<?php

namespace PMG\BingAds\AdInsight;

class SuggestKeywordsForUrlRequest
{

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var int $MaxKeywords
     */
    protected $MaxKeywords = null;

    /**
     * @var float $MinConfidenceScore
     */
    protected $MinConfidenceScore = null;

    /**
     * @var boolean $ExcludeBrand
     */
    protected $ExcludeBrand = null;

    /**
     * @param string $Url
     * @param string $Language
     * @param int $MaxKeywords
     * @param float $MinConfidenceScore
     * @param boolean $ExcludeBrand
     */
    public function __construct($Url, $Language, $MaxKeywords, $MinConfidenceScore, $ExcludeBrand)
    {
      $this->Url = $Url;
      $this->Language = $Language;
      $this->MaxKeywords = $MaxKeywords;
      $this->MinConfidenceScore = $MinConfidenceScore;
      $this->ExcludeBrand = $ExcludeBrand;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlRequest
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxKeywords()
    {
      return $this->MaxKeywords;
    }

    /**
     * @param int $MaxKeywords
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlRequest
     */
    public function setMaxKeywords($MaxKeywords)
    {
      $this->MaxKeywords = $MaxKeywords;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinConfidenceScore()
    {
      return $this->MinConfidenceScore;
    }

    /**
     * @param float $MinConfidenceScore
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlRequest
     */
    public function setMinConfidenceScore($MinConfidenceScore)
    {
      $this->MinConfidenceScore = $MinConfidenceScore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeBrand()
    {
      return $this->ExcludeBrand;
    }

    /**
     * @param boolean $ExcludeBrand
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlRequest
     */
    public function setExcludeBrand($ExcludeBrand)
    {
      $this->ExcludeBrand = $ExcludeBrand;
      return $this;
    }

}
