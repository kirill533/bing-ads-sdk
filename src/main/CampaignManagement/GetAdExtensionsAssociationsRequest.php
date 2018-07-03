<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionsAssociationsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdExtensionsTypeFilter for valid values
     *
     * @var list $AdExtensionType
     */
    protected $AdExtensionType = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AssociationType for valid values
     *
     * @var string $AssociationType
     */
    protected $AssociationType = null;

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @param int $AccountId
     * @param list $AdExtensionType
     * @param string $AssociationType
     * @param ArrayOflong $EntityIds
     */
    public function __construct($AccountId = null, $AdExtensionType = null, $AssociationType = null, $EntityIds = null)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionType = $AdExtensionType;
      $this->AssociationType = $AssociationType;
      $this->EntityIds = $EntityIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAdExtensionType($AdExtensionType)
    {
      $this->AdExtensionType = $AdExtensionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssociationType()
    {
      return $this->AssociationType;
    }

    /**
     * @param string $AssociationType
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

}
