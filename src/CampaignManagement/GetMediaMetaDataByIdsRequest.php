<?php

namespace PMG\BingAds\CampaignMangagement;

class GetMediaMetaDataByIdsRequest
{

    /**
     * @var ArrayOflong $MediaIds
     */
    protected $MediaIds = null;

    /**
     * @param ArrayOflong $MediaIds
     */
    public function __construct($MediaIds)
    {
      $this->MediaIds = $MediaIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getMediaIds()
    {
      return $this->MediaIds;
    }

    /**
     * @param ArrayOflong $MediaIds
     * @return \PMG\BingAds\CampaignMangagement\GetMediaMetaDataByIdsRequest
     */
    public function setMediaIds($MediaIds)
    {
      $this->MediaIds = $MediaIds;
      return $this;
    }

}
