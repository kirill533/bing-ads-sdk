<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByIdsRequest
     */
    public function setMediaIds($MediaIds)
    {
      $this->MediaIds = $MediaIds;
      return $this;
    }

}
