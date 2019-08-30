<?php

namespace PMG\BingAds\AdInsight;

class KeywordCategory
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var float $ConfidenceScore
     */
    protected $ConfidenceScore = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return \PMG\BingAds\AdInsight\KeywordCategory
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return float
     */
    public function getConfidenceScore()
    {
        return $this->ConfidenceScore;
    }

    /**
     * @param float $ConfidenceScore
     * @return \PMG\BingAds\AdInsight\KeywordCategory
     */
    public function setConfidenceScore($ConfidenceScore)
    {
        $this->ConfidenceScore = $ConfidenceScore;
        return $this;
    }

}
