<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedPositionByKeywordsRequest
{

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    /**
     * @var float $MaxBid
     */
    protected $MaxBid = null;

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
     * @var ArrayOfMatchType $MatchTypes
     */
    protected $MatchTypes = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param float $MaxBid
     * @param string $Language
     * @param ArrayOflong $LocationIds
     * @param CurrencyCode $CurrencyCode
     * @param ArrayOfMatchType $MatchTypes
     * @param int $CampaignId
     * @param int $AdGroupId
     */
    public function __construct($Keywords = null, $MaxBid = null, $Language = null, $LocationIds = null, $CurrencyCode = null, $MatchTypes = null, $CampaignId = null, $AdGroupId = null)
    {
      $this->Keywords = $Keywords;
      $this->MaxBid = $MaxBid;
      $this->Language = $Language;
      $this->LocationIds = $LocationIds;
      $this->CurrencyCode = $CurrencyCode;
      $this->MatchTypes = $MatchTypes;
      $this->CampaignId = $CampaignId;
      $this->AdGroupId = $AdGroupId;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfstring $Keywords
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxBid()
    {
      return $this->MaxBid;
    }

    /**
     * @param float $MaxBid
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
     */
    public function setMaxBid($MaxBid)
    {
      $this->MaxBid = $MaxBid;
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
     */
    public function setMatchTypes($MatchTypes)
    {
      $this->MatchTypes = $MatchTypes;
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
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
     * @return \PMG\BingAds\AdInsight\GetEstimatedPositionByKeywordsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

}
