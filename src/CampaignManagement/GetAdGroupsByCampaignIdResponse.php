<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdGroupsByCampaignIdResponse
{

    /**
     * @var ArrayOfAdGroup $AdGroups
     */
    protected $AdGroups = null;

    /**
     * @param ArrayOfAdGroup $AdGroups
     */
    public function __construct($AdGroups)
    {
      $this->AdGroups = $AdGroups;
    }

    /**
     * @return ArrayOfAdGroup
     */
    public function getAdGroups()
    {
      return $this->AdGroups;
    }

    /**
     * @param ArrayOfAdGroup $AdGroups
     * @return \PMG\BingAds\CampaignMangagement\GetAdGroupsByCampaignIdResponse
     */
    public function setAdGroups($AdGroups)
    {
      $this->AdGroups = $AdGroups;
      return $this;
    }

}
