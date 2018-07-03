<?php

namespace PMG\BingAds\CampaignManagement;

class AdGroupCriterionAction
{

    /**
     * @see \PMG\BingAds\CampaignManagement\ItemAction for valid values
     *
     * @var string $Action
     */
    protected $Action = null;

    /**
     * @var AdGroupCriterion $AdGroupCriterion
     */
    protected $AdGroupCriterion = null;

    /**
     * @param string $Action
     */
    public function __construct($Action = null)
    {
      $this->Action = $Action;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string $Action
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
