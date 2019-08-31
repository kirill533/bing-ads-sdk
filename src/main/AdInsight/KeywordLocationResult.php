<?php

namespace PMG\BingAds\AdInsight;

class KeywordLocationResult
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfKeywordLocation $KeywordLocations
     */
    protected $KeywordLocations = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordLocationResult
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * @return ArrayOfKeywordLocation
     */
    public function getKeywordLocations()
    {
        return $this->KeywordLocations;
    }

    /**
     * @param ArrayOfKeywordLocation $KeywordLocations
     * @return \PMG\BingAds\AdInsight\KeywordLocationResult
     */
    public function setKeywordLocations($KeywordLocations)
    {
        $this->KeywordLocations = $KeywordLocations;
        return $this;
    }

}
