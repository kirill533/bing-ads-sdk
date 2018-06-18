<?php

namespace PMG\BingAds\AdInsight;

class GetAuctionInsightDataRequest
{

    /**
     * @var EntityType $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var ArrayOfSearchParameter $SearchParameters
     */
    protected $SearchParameters = null;

    /**
     * @param EntityType $EntityType
     * @param ArrayOflong $EntityIds
     * @param ArrayOfSearchParameter $SearchParameters
     */
    public function __construct($EntityType, $EntityIds, $SearchParameters)
    {
      $this->EntityType = $EntityType;
      $this->EntityIds = $EntityIds;
      $this->SearchParameters = $SearchParameters;
    }

    /**
     * @return EntityType
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param EntityType $EntityType
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEntityIds()
    {
      return $this->EntityIds;
    }

    /**
     * @param ArrayOflong $EntityIds
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

    /**
     * @return ArrayOfSearchParameter
     */
    public function getSearchParameters()
    {
      return $this->SearchParameters;
    }

    /**
     * @param ArrayOfSearchParameter $SearchParameters
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setSearchParameters($SearchParameters)
    {
      $this->SearchParameters = $SearchParameters;
      return $this;
    }

}
