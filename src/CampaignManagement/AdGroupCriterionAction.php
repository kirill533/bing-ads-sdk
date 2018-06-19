<?php

namespace PMG\BingAds\CampaignManagement;

class AdGroupCriterionAction
{

    /**
     * @var ItemAction $Action
     */
    protected $Action = null;

    /**
     * @var AdGroupCriterion $AdGroupCriterion
     */
    protected $AdGroupCriterion = null;

    /**
     * @param ItemAction $Action
     */
    public function __construct($Action = null)
    {
      $this->Action = $Action;
    }

    /**
     * @return ItemAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ItemAction $Action
     * @return \PMG\BingAds\CampaignManagement\AdGroupCriterionAction
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return AdGroupCriterion
     */
    public function getAdGroupCriterion()
    {
      return $this->AdGroupCriterion;
    }

    /**
     * @param AdGroupCriterion $AdGroupCriterion
     * @return \PMG\BingAds\CampaignManagement\AdGroupCriterionAction
     */
    public function setAdGroupCriterion($AdGroupCriterion)
    {
      $this->AdGroupCriterion = $AdGroupCriterion;
      return $this;
    }

}
