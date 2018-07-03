<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateCampaignCriterionsRequest
{

    /**
     * @var ArrayOfCampaignCriterion $CampaignCriterions
     */
    protected $CampaignCriterions = null;

    /**
     * @var CampaignCriterionType $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOfCampaignCriterion $CampaignCriterions
     * @param CampaignCriterionType $CriterionType
     */
    public function __construct($CampaignCriterions = null, $CriterionType = null)
    {
      $this->CampaignCriterions = $CampaignCriterions;
      $this->CriterionType = $CriterionType;
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
     * @return \PMG\BingAds\CampaignManagement\UpdateCampaignCriterionsRequest
     */
    public function setCampaignCriterions($CampaignCriterions)
    {
      $this->CampaignCriterions = $CampaignCriterions;
      return $this;
    }

    /**
     * @return CampaignCriterionType
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param CampaignCriterionType $CriterionType
     * @return \PMG\BingAds\CampaignManagement\UpdateCampaignCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
