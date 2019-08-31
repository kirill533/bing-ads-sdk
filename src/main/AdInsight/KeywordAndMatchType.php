<?php

namespace PMG\BingAds\AdInsight;

class KeywordAndMatchType
{

    /**
     * @var string $KeywordText
     */
    protected $KeywordText = null;

    /**
     * @var ArrayOfMatchType $MatchTypes
     */
    protected $MatchTypes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKeywordText()
    {
        return $this->KeywordText;
    }

    /**
     * @param string $KeywordText
     * @return \PMG\BingAds\AdInsight\KeywordAndMatchType
     */
    public function setKeywordText($KeywordText)
    {
        $this->KeywordText = $KeywordText;
        return $this;
    }

    /**
     * @return ArrayOfMatchType
     */
    public function getMatchTypes()
    {
        return $this->MatchTypes;
    }

    /**
     * @param ArrayOfMatchType $MatchTypes
     * @return \PMG\BingAds\AdInsight\KeywordAndMatchType
     */
    public function setMatchTypes($MatchTypes)
    {
        $this->MatchTypes = $MatchTypes;
        return $this;
    }

}
