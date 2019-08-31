<?php

namespace PMG\BingAds\AdInsight;

class KeywordIdEstimatedPosition
{

    /**
     * @var int $KeywordId
     */
    protected $KeywordId = null;

    /**
     * @var KeywordEstimatedPosition $KeywordEstimatedPosition
     */
    protected $KeywordEstimatedPosition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getKeywordId()
    {
        return $this->KeywordId;
    }

    /**
     * @param int $KeywordId
     * @return \PMG\BingAds\AdInsight\KeywordIdEstimatedPosition
     */
    public function setKeywordId($KeywordId)
    {
        $this->KeywordId = $KeywordId;
        return $this;
    }

    /**
     * @return KeywordEstimatedPosition
     */
    public function getKeywordEstimatedPosition()
    {
        return $this->KeywordEstimatedPosition;
    }

    /**
     * @param KeywordEstimatedPosition $KeywordEstimatedPosition
     * @return \PMG\BingAds\AdInsight\KeywordIdEstimatedPosition
     */
    public function setKeywordEstimatedPosition($KeywordEstimatedPosition)
    {
        $this->KeywordEstimatedPosition = $KeywordEstimatedPosition;
        return $this;
    }

}
