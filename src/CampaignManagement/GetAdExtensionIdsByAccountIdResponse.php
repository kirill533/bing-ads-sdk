<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdExtensionIdsByAccountIdResponse
{

    /**
     * @var ArrayOflong $AdExtensionIds
     */
    protected $AdExtensionIds = null;

    /**
     * @param ArrayOflong $AdExtensionIds
     */
    public function __construct($AdExtensionIds)
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionIdsByAccountIdResponse
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }

}
