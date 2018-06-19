<?php

namespace PMG\BingAds\CampaignManagement;

class AdExtensionAssociation
{

    /**
     * @var AdExtension $AdExtension
     */
    protected $AdExtension = null;

    /**
     * @var AssociationType $AssociationType
     */
    protected $AssociationType = null;

    /**
     * @var AdExtensionEditorialStatus $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @param AssociationType $AssociationType
     * @param int $EntityId
     */
    public function __construct($AssociationType, $EntityId)
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
     * @return AssociationType
     */
    public function getAssociationType()
    {
      return $this->AssociationType;
    }

    /**
     * @param AssociationType $AssociationType
     * @return \PMG\BingAds\CampaignManagement\AdExtensionAssociation
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

    /**
     * @return AdExtensionEditorialStatus
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param AdExtensionEditorialStatus $EditorialStatus
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
