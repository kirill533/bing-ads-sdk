<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteAudiencesRequest
{

    /**
     * @var ArrayOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @param ArrayOflong $AudienceIds
     */
    public function __construct($AudienceIds = null)
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
     * @return \PMG\BingAds\CampaignManagement\DeleteAudiencesRequest
     */
    public function setAudienceIds($AudienceIds)
    {
        $this->AudienceIds = $AudienceIds;
        return $this;
    }

}
