<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionIdsByAccountIdResponse
{

    /**
     * @var ArrayOflong $AdExtensionIds
     */
    protected $AdExtensionIds = null;

    /**
     * @param ArrayOflong $AdExtensionIds
     */
    public function __construct($AdExtensionIds = null)
    {
      $this->AdExtensionIds = $AdExtensionIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionIdsByAccountIdResponse
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }

}
