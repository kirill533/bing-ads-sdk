<?php

namespace PMG\BingAds\AdInsight;

class AdGroupEstimate
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfKeywordEstimate $KeywordEstimates
     */
    protected $KeywordEstimates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\AdInsight\AdGroupEstimate
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return ArrayOfKeywordEstimate
     */
    public function getKeywordEstimates()
    {
        return $this->KeywordEstimates;
    }

    /**
     * @param ArrayOfKeywordEstimate $KeywordEstimates
     * @return \PMG\BingAds\AdInsight\AdGroupEstimate
     */
    public function setKeywordEstimates($KeywordEstimates)
    {
        $this->KeywordEstimates = $KeywordEstimates;
        return $this;
    }

}
