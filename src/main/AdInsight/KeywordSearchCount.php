<?php

namespace PMG\BingAds\AdInsight;

class KeywordSearchCount
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfSearchCountsByAttributes $SearchCountsByAttributes
     */
    protected $SearchCountsByAttributes = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordSearchCount
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * @return ArrayOfSearchCountsByAttributes
     */
    public function getSearchCountsByAttributes()
    {
        return $this->SearchCountsByAttributes;
    }

    /**
     * @param ArrayOfSearchCountsByAttributes $SearchCountsByAttributes
     * @return \PMG\BingAds\AdInsight\KeywordSearchCount
     */
    public function setSearchCountsByAttributes($SearchCountsByAttributes)
    {
        $this->SearchCountsByAttributes = $SearchCountsByAttributes;
        return $this;
    }

}
