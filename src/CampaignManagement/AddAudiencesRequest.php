<?php

namespace PMG\BingAds\CampaignManagement;

class AddAudiencesRequest
{

    /**
     * @var ArrayOfAudience $Audiences
     */
    protected $Audiences = null;

    /**
     * @param ArrayOfAudience $Audiences
     */
    public function __construct($Audiences)
    {
      $this->Audiences = $Audiences;
    }

    /**
     * @return ArrayOfAudience
     */
    public function getAudiences()
    {
      return $this->Audiences;
    }

    /**
     * @param ArrayOfAudience $Audiences
     * @return \PMG\BingAds\CampaignManagement\AddAudiencesRequest
     */
    public function setAudiences($Audiences)
    {
      $this->Audiences = $Audiences;
      return $this;
    }

}
