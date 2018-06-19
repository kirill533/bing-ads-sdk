<?php

namespace PMG\BingAds\CampaignManagement;

class AddSharedEntityResponse
{

    /**
     * @var ArrayOflong $ListItemIds
     */
    protected $ListItemIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @var int $SharedEntityId
     */
    protected $SharedEntityId = null;

    /**
     * @param ArrayOflong $ListItemIds
     * @param ArrayOfBatchError $PartialErrors
     * @param int $SharedEntityId
     */
    public function __construct($ListItemIds, $PartialErrors, $SharedEntityId)
    {
      $this->ListItemIds = $ListItemIds;
      $this->PartialErrors = $PartialErrors;
      $this->SharedEntityId = $SharedEntityId;
    }

    /**
     * @return ArrayOflong
     */
    public function getListItemIds()
    {
      return $this->ListItemIds;
    }

    /**
     * @param ArrayOflong $ListItemIds
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityResponse
     */
    public function setListItemIds($ListItemIds)
    {
      $this->ListItemIds = $ListItemIds;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

    /**
     * @return int
     */
    public function getSharedEntityId()
    {
      return $this->SharedEntityId;
    }

    /**
     * @param int $SharedEntityId
     * @return \PMG\BingAds\CampaignManagement\AddSharedEntityResponse
     */
    public function setSharedEntityId($SharedEntityId)
    {
      $this->SharedEntityId = $SharedEntityId;
      return $this;
    }

}
