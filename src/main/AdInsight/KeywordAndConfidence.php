<?php

namespace PMG\BingAds\AdInsight;

class KeywordAndConfidence
{

    /**
     * @var string $SuggestedKeyword
     */
    protected $SuggestedKeyword = null;

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
    public function getSuggestedKeyword()
    {
        return $this->SuggestedKeyword;
    }

    /**
     * @param string $SuggestedKeyword
     * @return \PMG\BingAds\AdInsight\KeywordAndConfidence
     */
    public function setSuggestedKeyword($SuggestedKeyword)
    {
        $this->SuggestedKeyword = $SuggestedKeyword;
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
     * @return \PMG\BingAds\AdInsight\KeywordAndConfidence
     */
    public function setConfidenceScore($ConfidenceScore)
    {
        $this->ConfidenceScore = $ConfidenceScore;
        return $this;
    }

}
