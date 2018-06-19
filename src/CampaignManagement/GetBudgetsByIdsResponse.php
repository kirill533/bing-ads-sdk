<?php

namespace PMG\BingAds\CampaignManagement;

class GetBudgetsByIdsResponse
{

    /**
     * @var ArrayOfBudget $Budgets
     */
    protected $Budgets = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfBudget $Budgets
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Budgets, $PartialErrors)
    {
      $this->Budgets = $Budgets;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetBudgetsByIdsResponse
     */
    public function setBudgets($Budgets)
    {
      $this->Budgets = $Budgets;
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
     * @return \PMG\BingAds\CampaignManagement\GetBudgetsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
