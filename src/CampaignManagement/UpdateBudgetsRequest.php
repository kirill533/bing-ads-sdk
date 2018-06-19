<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateBudgetsRequest
{

    /**
     * @var ArrayOfBudget $Budgets
     */
    protected $Budgets = null;

    /**
     * @param ArrayOfBudget $Budgets
     */
    public function __construct($Budgets)
    {
      $this->Budgets = $Budgets;
    }

    /**
     * @return ArrayOfBudget
     */
    public function getBudgets()
    {
      return $this->Budgets;
    }

    /**
     * @param ArrayOfBudget $Budgets
     * @return \PMG\BingAds\CampaignManagement\UpdateBudgetsRequest
     */
    public function setBudgets($Budgets)
    {
      $this->Budgets = $Budgets;
      return $this;
    }

}
