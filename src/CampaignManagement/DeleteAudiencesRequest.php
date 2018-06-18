<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteAudiencesRequest
{

    /**
     * @var ArrayOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @param ArrayOflong $AudienceIds
     */
    public function __construct($AudienceIds)
    {
      $this->AudienceIds = $AudienceIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getAudienceIds()
    {
      return $this->AudienceIds;
    }

    /**
     * @param ArrayOflong $AudienceIds
     * @return \PMG\BingAds\CampaignMangagement\DeleteAudiencesRequest
     */
    public function setAudienceIds($AudienceIds)
    {
      $this->AudienceIds = $AudienceIds;
      return $this;
    }

}
