<?php

namespace PMG\BingAds\AdInsight;

class SuggestKeywordsFromExistingKeywordsResponse
{

    /**
     * @var ArrayOfKeywordSuggestion $KeywordSuggestions
     */
    protected $KeywordSuggestions = null;

    /**
     * @param ArrayOfKeywordSuggestion $KeywordSuggestions
     */
    public function __construct($KeywordSuggestions = null)
    {
      $this->KeywordSuggestions = $KeywordSuggestions;
    }

    /**
     * @return ArrayOfKeywordSuggestion
     */
    public function getKeywordSuggestions()
    {
      return $this->KeywordSuggestions;
    }

    /**
     * @param ArrayOfKeywordSuggestion $KeywordSuggestions
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsResponse
     */
    public function setKeywordSuggestions($KeywordSuggestions)
    {
      $this->KeywordSuggestions = $KeywordSuggestions;
      return $this;
    }

}
