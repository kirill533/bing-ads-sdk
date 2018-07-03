<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionIdsByAccountIdRequest
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
     * @param int $AccountId
     * @param list $AdExtensionType
     * @param string $AssociationType
     */
    public function __construct($AccountId = null, $AdExtensionType = null, $AssociationType = null)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionType = $AdExtensionType;
      $this->AssociationType = $AssociationType;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionIdsByAccountIdRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionIdsByAccountIdRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionIdsByAccountIdRequest
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

}
