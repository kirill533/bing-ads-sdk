<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedBidByKeywordsRequest
{

    /**
     * @var ArrayOfKeywordAndMatchType $Keywords
     */
    protected $Keywords = null;

    /**
     * @var TargetAdPosition $TargetPositionForAds
     */
    protected $TargetPositionForAds = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var ArrayOflong $LocationIds
     */
    protected $LocationIds = null;

    /**
     * @var CurrencyCode $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var string $EntityLevelBid
     */
    protected $EntityLevelBid = null;

    /**
     * @param ArrayOfKeywordAndMatchType $Keywords
     * @param TargetAdPosition $TargetPositionForAds
     * @param string $Language
     * @param ArrayOflong $LocationIds
     * @param CurrencyCode $CurrencyCode
     * @param int $CampaignId
     * @param int $AdGroupId
     * @param string $EntityLevelBid
     */
    public function __construct($Keywords = null, $TargetPositionForAds = null, $Language = null, $LocationIds = null, $CurrencyCode = null, $CampaignId = null, $AdGroupId = null, $EntityLevelBid = null)
    {
      $this->Keywords = $Keywords;
      $this->TargetPositionForAds = $TargetPositionForAds;
      $this->Language = $Language;
      $this->LocationIds = $LocationIds;
      $this->CurrencyCode = $CurrencyCode;
      $this->CampaignId = $CampaignId;
      $this->AdGroupId = $AdGroupId;
      $this->EntityLevelBid = $EntityLevelBid;
    }

    /**
     * @return ArrayOfKeywordAndMatchType
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfKeywordAndMatchType $Keywords
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

    /**
     * @return TargetAdPosition
     */
    public function getTargetPositionForAds()
    {
      return $this->TargetPositionForAds;
    }

    /**
     * @param TargetAdPosition $TargetPositionForAds
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setTargetPositionForAds($TargetPositionForAds)
    {
      $this->TargetPositionForAds = $TargetPositionForAds;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getLocationIds()
    {
      return $this->LocationIds;
    }

    /**
     * @param ArrayOflong $LocationIds
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setLocationIds($LocationIds)
    {
      $this->LocationIds = $LocationIds;
      return $this;
    }

    /**
     * @return CurrencyCode
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param CurrencyCode $CurrencyCode
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityLevelBid()
    {
      return $this->EntityLevelBid;
    }

    /**
     * @param string $EntityLevelBid
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsRequest
     */
    public function setEntityLevelBid($EntityLevelBid)
    {
      $this->EntityLevelBid = $EntityLevelBid;
      return $this;
    }

}
