<?php

namespace PMG\BingAds\CampaignManagement;

class AdExtensionAssociation
{

    /**
     * @var AdExtension $AdExtension
     */
    protected $AdExtension = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AssociationType for valid values
     *
     * @var string $AssociationType
     */
    protected $AssociationType = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdExtensionEditorialStatus for valid values
     *
     * @var string $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @param string $AssociationType
     * @param int $EntityId
     */
    public function __construct($AssociationType = null, $EntityId = null)
    {
      $this->AssociationType = $AssociationType;
      $this->EntityId = $EntityId;
    }

    /**
     * @return AdExtension
     */
    public function getAdExtension()
    {
      return $this->AdExtension;
    }

    /**
     * @param AdExtension $AdExtension
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociation
     */
    public function setAdExtension($AdExtension)
    {
      $this->AdExtension = $AdExtension;
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
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociation
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param string $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociation
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
      return $this->EntityId;
    }

    /**
     * @param int $EntityId
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociation
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

}
