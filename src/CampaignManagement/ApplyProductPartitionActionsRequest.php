<?php

namespace PMG\BingAds\CampaignMangagement;

class ApplyProductPartitionActionsRequest
{

    /**
     * @var ArrayOfAdGroupCriterionAction $CriterionActions
     */
    protected $CriterionActions = null;

    /**
     * @param ArrayOfAdGroupCriterionAction $CriterionActions
     */
    public function __construct($CriterionActions)
    {
      $this->CriterionActions = $CriterionActions;
    }

    /**
     * @return ArrayOfAdGroupCriterionAction
     */
    public function getCriterionActions()
    {
      return $this->CriterionActions;
    }

    /**
     * @param ArrayOfAdGroupCriterionAction $CriterionActions
     * @return \PMG\BingAds\CampaignMangagement\ApplyProductPartitionActionsRequest
     */
    public function setCriterionActions($CriterionActions)
    {
      $this->CriterionActions = $CriterionActions;
      return $this;
    }

}
