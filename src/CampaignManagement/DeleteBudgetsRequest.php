<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteBudgetsRequest
{

    /**
     * @var ArrayOflong $BudgetIds
     */
    protected $BudgetIds = null;

    /**
     * @param ArrayOflong $BudgetIds
     */
    public function __construct($BudgetIds = null)
    {
      $this->BudgetIds = $BudgetIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getBudgetIds()
    {
      return $this->BudgetIds;
    }

    /**
     * @param ArrayOflong $BudgetIds
     * @return \PMG\BingAds\CampaignManagement\DeleteBudgetsRequest
     */
    public function setBudgetIds($BudgetIds)
    {
      $this->BudgetIds = $BudgetIds;
      return $this;
    }

}
