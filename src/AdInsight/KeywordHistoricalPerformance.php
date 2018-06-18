<?php

namespace PMG\BingAds\AdInsight;

class KeywordHistoricalPerformance
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfKeywordKPI $KeywordKPIs
     */
    protected $KeywordKPIs = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordHistoricalPerformance
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return ArrayOfKeywordKPI
     */
    public function getKeywordKPIs()
    {
      return $this->KeywordKPIs;
    }

    /**
     * @param ArrayOfKeywordKPI $KeywordKPIs
     * @return \PMG\BingAds\AdInsight\KeywordHistoricalPerformance
     */
    public function setKeywordKPIs($KeywordKPIs)
    {
      $this->KeywordKPIs = $KeywordKPIs;
      return $this;
    }

}
