<?php

namespace PMG\BingAds\AdInsight;

class KeywordSuggestion
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfKeywordAndConfidence $SuggestionsAndConfidence
     */
    protected $SuggestionsAndConfidence = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordSuggestion
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * @return ArrayOfKeywordAndConfidence
     */
    public function getSuggestionsAndConfidence()
    {
        return $this->SuggestionsAndConfidence;
    }

    /**
     * @param ArrayOfKeywordAndConfidence $SuggestionsAndConfidence
     * @return \PMG\BingAds\AdInsight\KeywordSuggestion
     */
    public function setSuggestionsAndConfidence($SuggestionsAndConfidence)
    {
        $this->SuggestionsAndConfidence = $SuggestionsAndConfidence;
        return $this;
    }

}
