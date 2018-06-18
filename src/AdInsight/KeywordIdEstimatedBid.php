<?php

namespace PMG\BingAds\AdInsight;

class KeywordIdEstimatedBid
{

    /**
     * @var int $KeywordId
     */
    protected $KeywordId = null;

    /**
     * @var KeywordEstimatedBid $KeywordEstimatedBid
     */
    protected $KeywordEstimatedBid = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordIdEstimatedBid
     */
    public function setKeywordId($KeywordId)
    {
      $this->KeywordId = $KeywordId;
      return $this;
    }

    /**
     * @return KeywordEstimatedBid
     */
    public function getKeywordEstimatedBid()
    {
      return $this->KeywordEstimatedBid;
    }

    /**
     * @param KeywordEstimatedBid $KeywordEstimatedBid
     * @return \PMG\BingAds\AdInsight\KeywordIdEstimatedBid
     */
    public function setKeywordEstimatedBid($KeywordEstimatedBid)
    {
      $this->KeywordEstimatedBid = $KeywordEstimatedBid;
      return $this;
    }

}
