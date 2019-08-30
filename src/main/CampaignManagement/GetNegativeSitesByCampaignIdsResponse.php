<?php

namespace PMG\BingAds\CampaignManagement;

class GetNegativeSitesByCampaignIdsResponse
{

    /**
     * @var ArrayOfCampaignNegativeSites $CampaignNegativeSites
     */
    protected $CampaignNegativeSites = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfCampaignNegativeSites $CampaignNegativeSites
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($CampaignNegativeSites = null, $PartialErrors = null)
    {
    $this->CampaignNegativeSites = $CampaignNegativeSites;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfCampaignNegativeSites
     */
    public function getCampaignNegativeSites()
    {
        return $this->CampaignNegativeSites;
    }

    /**
     * @param ArrayOfCampaignNegativeSites $CampaignNegativeSites
     * @return \PMG\BingAds\CampaignManagement\GetNegativeSitesByCampaignIdsResponse
     */
    public function setCampaignNegativeSites($CampaignNegativeSites)
    {
        $this->CampaignNegativeSites = $CampaignNegativeSites;
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
     * @return \PMG\BingAds\CampaignManagement\GetNegativeSitesByCampaignIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
