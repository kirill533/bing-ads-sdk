<?php

namespace PMG\BingAds\CampaignManagement;

class GetNegativeSitesByAdGroupIdsResponse
{

    /**
     * @var ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     */
    protected $AdGroupNegativeSites = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AdGroupNegativeSites = null, $PartialErrors = null)
    {
    $this->AdGroupNegativeSites = $AdGroupNegativeSites;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAdGroupNegativeSites
     */
    public function getAdGroupNegativeSites()
    {
        return $this->AdGroupNegativeSites;
    }

    /**
     * @param ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     * @return \PMG\BingAds\CampaignManagement\GetNegativeSitesByAdGroupIdsResponse
     */
    public function setAdGroupNegativeSites($AdGroupNegativeSites)
    {
        $this->AdGroupNegativeSites = $AdGroupNegativeSites;
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
     * @return \PMG\BingAds\CampaignManagement\GetNegativeSitesByAdGroupIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
