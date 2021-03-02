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
     * @var AuctionInsightKpiAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param EntityType $EntityType
     * @param ArrayOflong $EntityIds
     * @param ArrayOfSearchParameter $SearchParameters
     * @param AuctionInsightKpiAdditionalField $ReturnAdditionalFields
     */
    public function __construct($EntityType = null, $EntityIds = null, $SearchParameters = null, $ReturnAdditionalFields = null)
    {
    $this->EntityType = $EntityType;
    $this->EntityIds = $EntityIds;
    $this->SearchParameters = $SearchParameters;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
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

    /**
     * @return AuctionInsightKpiAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param AuctionInsightKpiAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
