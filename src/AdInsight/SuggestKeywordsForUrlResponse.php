<?php

namespace PMG\BingAds\AdInsight;

class SuggestKeywordsForUrlResponse
{

    /**
     * @var ArrayOfKeywordAndConfidence $Keywords
     */
    protected $Keywords = null;

    /**
     * @param ArrayOfKeywordAndConfidence $Keywords
     */
    public function __construct($Keywords = null)
    {
      $this->Keywords = $Keywords;
    }

    /**
     * @return ArrayOfKeywordAndConfidence
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfKeywordAndConfidence $Keywords
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsForUrlResponse
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

}
