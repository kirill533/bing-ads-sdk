<?php

namespace PMG\BingAds\CampaignManagement;

class GetAudiencesByIdsRequest
{

    /**
     * @var ArrayOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AudienceType for valid values
     *
     * @var list $Type
     */
    protected $Type = null;

    /**
     * @param ArrayOflong $AudienceIds
     * @param list $Type
     */
    public function __construct($AudienceIds = null, $Type = null)
    {
      $this->AudienceIds = $AudienceIds;
      $this->Type = $Type;
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
     * @return \PMG\BingAds\CampaignManagement\GetAudiencesByIdsRequest
     */
    public function setAudienceIds($AudienceIds)
    {
      $this->AudienceIds = $AudienceIds;
      return $this;
    }

    /**
     * @return list
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param list $Type
     * @return \PMG\BingAds\CampaignManagement\GetAudiencesByIdsRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
