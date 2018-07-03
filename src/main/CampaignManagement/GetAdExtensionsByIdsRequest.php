<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @see \PMG\BingAds\CampaignManagement\AdExtensionsTypeFilter for valid values
     *
     * @var list $AdExtensionType
     */
    protected $AdExtensionType = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $AdExtensionIds
     * @param list $AdExtensionType
     */
    public function __construct($AccountId = null, $AdExtensionIds = null, $AdExtensionType = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsByIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsByIdsRequest
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdExtensionType()
    {
      return $this->AdExtensionType;
    }

    /**
     * @param list $AdExtensionType
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsByIdsRequest
     */
    public function setAdExtensionType($AdExtensionType)
    {
      $this->AdExtensionType = $AdExtensionType;
      return $this;
    }

}
