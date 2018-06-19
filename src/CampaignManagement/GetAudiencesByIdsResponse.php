<?php

namespace PMG\BingAds\CampaignManagement;

class GetAudiencesByIdsResponse
{

    /**
     * @var ArrayOfAudience $Audiences
     */
    protected $Audiences = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAudience $Audiences
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Audiences, $PartialErrors)
    {
      $this->Audiences = $Audiences;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetAudiencesByIdsResponse
     */
    public function setAudiences($Audiences)
    {
      $this->Audiences = $Audiences;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignManagement\GetAudiencesByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
