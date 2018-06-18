<?php

namespace PMG\BingAds\AdInsight;

class ExcludeAccountKeywordsSearchParameter extends SearchParameter
{

    /**
     * @var boolean $ExcludeAccountKeywords
     */
    protected $ExcludeAccountKeywords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getExcludeAccountKeywords()
    {
      return $this->ExcludeAccountKeywords;
    }

    /**
     * @param boolean $ExcludeAccountKeywords
     * @return \PMG\BingAds\AdInsight\ExcludeAccountKeywordsSearchParameter
     */
    public function setExcludeAccountKeywords($ExcludeAccountKeywords)
    {
      $this->ExcludeAccountKeywords = $ExcludeAccountKeywords;
      return $this;
    }

}
