<?php

namespace PMG\BingAds\AdInsight;

class KeywordDemographicResult
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfKeywordDemographic $KeywordDemographics
     */
    protected $KeywordDemographics = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordDemographicResult
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
        return $this;
    }

    /**
     * @return ArrayOfKeywordDemographic
     */
    public function getKeywordDemographics()
    {
        return $this->KeywordDemographics;
    }

    /**
     * @param ArrayOfKeywordDemographic $KeywordDemographics
     * @return \PMG\BingAds\AdInsight\KeywordDemographicResult
     */
    public function setKeywordDemographics($KeywordDemographics)
    {
        $this->KeywordDemographics = $KeywordDemographics;
        return $this;
    }

}
