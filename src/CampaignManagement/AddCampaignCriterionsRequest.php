<?php

namespace PMG\BingAds\CampaignMangagement;

class AddCampaignCriterionsRequest
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
    public function __construct($CampaignCriterions, $CriterionType)
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
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignCriterionsRequest
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
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
