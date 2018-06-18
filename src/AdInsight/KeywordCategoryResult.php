<?php

namespace PMG\BingAds\AdInsight;

class KeywordCategoryResult
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfKeywordCategory $KeywordCategories
     */
    protected $KeywordCategories = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordCategoryResult
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return ArrayOfKeywordCategory
     */
    public function getKeywordCategories()
    {
      return $this->KeywordCategories;
    }

    /**
     * @param ArrayOfKeywordCategory $KeywordCategories
     * @return \PMG\BingAds\AdInsight\KeywordCategoryResult
     */
    public function setKeywordCategories($KeywordCategories)
    {
      $this->KeywordCategories = $KeywordCategories;
      return $this;
    }

}
