<?php

namespace PMG\BingAds\CampaignMangagement;

class AddBudgetsRequest
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
     * @return \PMG\BingAds\CampaignMangagement\AddBudgetsRequest
     */
    public function setBudgets($Budgets)
    {
      $this->Budgets = $Budgets;
      return $this;
    }

}
