<?php

namespace PMG\BingAds\CampaignManagement;

class LocationIntentCriterion extends Criterion
{

    /**
     * @see \PMG\BingAds\CampaignManagement\IntentOption for valid values
     *
     * @var string $IntentOption
     */
    protected $IntentOption = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getIntentOption()
    {
      return $this->IntentOption;
    }

    /**
     * @param string $IntentOption
     * @return \PMG\BingAds\CampaignManagement\LocationIntentCriterion
     */
    public function setIntentOption($IntentOption)
    {
      $this->IntentOption = $IntentOption;
      return $this;
    }

}
