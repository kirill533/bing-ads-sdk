<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdsByEditorialStatusRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var AdEditorialStatus $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var ArrayOfAdType $AdTypes
     */
    protected $AdTypes = null;

    /**
     * @param int $AdGroupId
     * @param AdEditorialStatus $EditorialStatus
     * @param ArrayOfAdType $AdTypes
     */
    public function __construct($AdGroupId, $EditorialStatus, $AdTypes)
    {
      $this->AdGroupId = $AdGroupId;
      $this->EditorialStatus = $EditorialStatus;
      $this->AdTypes = $AdTypes;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByEditorialStatusRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return AdEditorialStatus
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param AdEditorialStatus $EditorialStatus
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByEditorialStatusRequest
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

    /**
     * @return ArrayOfAdType
     */
    public function getAdTypes()
    {
      return $this->AdTypes;
    }

    /**
     * @param ArrayOfAdType $AdTypes
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByEditorialStatusRequest
     */
    public function setAdTypes($AdTypes)
    {
      $this->AdTypes = $AdTypes;
      return $this;
    }

}
