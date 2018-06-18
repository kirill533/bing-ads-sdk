<?php

namespace PMG\BingAds\CampaignMangagement;

class ProductScope extends Criterion
{

    /**
     * @var ArrayOfProductCondition $Conditions
     */
    protected $Conditions = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfProductCondition
     */
    public function getConditions()
    {
      return $this->Conditions;
    }

    /**
     * @param ArrayOfProductCondition $Conditions
     * @return \PMG\BingAds\CampaignMangagement\ProductScope
     */
    public function setConditions($Conditions)
    {
      $this->Conditions = $Conditions;
      return $this;
    }

}
