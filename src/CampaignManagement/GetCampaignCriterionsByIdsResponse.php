<?php

namespace PMG\BingAds\CampaignMangagement;

class GetCampaignCriterionsByIdsResponse
{

    /**
     * @var ArrayOfCampaignCriterion $CampaignCriterions
     */
    protected $CampaignCriterions = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfCampaignCriterion $CampaignCriterions
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($CampaignCriterions, $PartialErrors)
    {
      $this->CampaignCriterions = $CampaignCriterions;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfCampaignCriterion
     */
    public function getCampaignCriterions()
    {
      return $this->CampaignCriterions;
    }

    /**
     * @param ArrayOfCampaignCriterion $CampaignCriterions
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignCriterionsByIdsResponse
     */
    public function setCampaignCriterions($CampaignCriterions)
    {
      $this->CampaignCriterions = $CampaignCriterions;
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
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignCriterionsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
