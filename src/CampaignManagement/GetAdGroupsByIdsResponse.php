<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdGroupsByIdsResponse
{

    /**
     * @var ArrayOfAdGroup $AdGroups
     */
    protected $AdGroups = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdGroup $AdGroups
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdGroups = null, $PartialErrors = null)
    {
      $this->AdGroups = $AdGroups;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByIdsResponse
     */
    public function setAdGroups($AdGroups)
    {
      $this->AdGroups = $AdGroups;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
