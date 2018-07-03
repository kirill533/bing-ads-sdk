<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByEditorialStatusRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdEditorialStatus for valid values
     *
     * @var string $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var ArrayOfAdType $AdTypes
     */
    protected $AdTypes = null;

    /**
     * @param int $AdGroupId
     * @param string $EditorialStatus
     * @param ArrayOfAdType $AdTypes
     */
    public function __construct($AdGroupId = null, $EditorialStatus = null, $AdTypes = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByEditorialStatusRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByEditorialStatusRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByEditorialStatusRequest
     */
    public function setAdTypes($AdTypes)
    {
      $this->AdTypes = $AdTypes;
      return $this;
    }

}
