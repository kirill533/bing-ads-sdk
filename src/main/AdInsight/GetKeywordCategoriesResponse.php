<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordCategoriesResponse
{

    /**
     * @var ArrayOfKeywordCategoryResult $Result
     */
    protected $Result = null;

    /**
     * @param ArrayOfKeywordCategoryResult $Result
     */
    public function __construct($Result = null)
    {
      $this->Result = $Result;
    }

    /**
     * @return ArrayOfKeywordCategoryResult
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param ArrayOfKeywordCategoryResult $Result
     * @return \PMG\BingAds\AdInsight\GetKeywordCategoriesResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
