<?php

namespace PMG\BingAds\CampaignManagement;

class AddBudgetsResponse
{

    /**
     * @var ArrayOfNullableOflong $BudgetIds
     */
    protected $BudgetIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $BudgetIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($BudgetIds = null, $PartialErrors = null)
    {
    $this->BudgetIds = $BudgetIds;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getBudgetIds()
    {
        return $this->BudgetIds;
    }

    /**
     * @param ArrayOfNullableOflong $BudgetIds
     * @return \PMG\BingAds\CampaignManagement\AddBudgetsResponse
     */
    public function setBudgetIds($BudgetIds)
    {
        $this->BudgetIds = $BudgetIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddBudgetsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
