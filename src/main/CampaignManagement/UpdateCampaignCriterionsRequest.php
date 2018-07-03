<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateCampaignCriterionsRequest
{

    /**
     * @var ArrayOfCampaignCriterion $CampaignCriterions
     */
    protected $CampaignCriterions = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\CampaignCriterionType for valid values
     *
     * @var list $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOfCampaignCriterion $CampaignCriterions
     * @param list $CriterionType
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
     * @return list
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param list $CriterionType
     * @return \PMG\BingAds\CampaignManagement\UpdateCampaignCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
