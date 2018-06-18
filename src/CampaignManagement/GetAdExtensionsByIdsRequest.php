<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdExtensionsByIdsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $AdExtensionIds
     */
    protected $AdExtensionIds = null;

    /**
     * @var AdExtensionsTypeFilter $AdExtensionType
     */
    protected $AdExtensionType = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $AdExtensionIds
     * @param AdExtensionsTypeFilter $AdExtensionType
     */
    public function __construct($AccountId, $AdExtensionIds, $AdExtensionType)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionIds = $AdExtensionIds;
      $this->AdExtensionType = $AdExtensionType;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsByIdsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdExtensionIds()
    {
      return $this->AdExtensionIds;
    }

    /**
     * @param ArrayOflong $AdExtensionIds
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsByIdsRequest
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }

    /**
     * @return AdExtensionsTypeFilter
     */
    public function getAdExtensionType()
    {
      return $this->AdExtensionType;
    }

    /**
     * @param AdExtensionsTypeFilter $AdExtensionType
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsByIdsRequest
     */
    public function setAdExtensionType($AdExtensionType)
    {
      $this->AdExtensionType = $AdExtensionType;
      return $this;
    }

}