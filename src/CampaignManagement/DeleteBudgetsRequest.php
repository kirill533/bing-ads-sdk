<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteBudgetsRequest
{

    /**
     * @var ArrayOflong $BudgetIds
     */
    protected $BudgetIds = null;

    /**
     * @param ArrayOflong $BudgetIds
     */
    public function __construct($BudgetIds)
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteBudgetsRequest
     */
    public function setBudgetIds($BudgetIds)
    {
      $this->BudgetIds = $BudgetIds;
      return $this;
    }

}
