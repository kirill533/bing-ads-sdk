<?php

namespace PMG\BingAds\CampaignMangagement;

class GenderCriterion extends Criterion
{

    /**
     * @var GenderType $GenderType
     */
    protected $GenderType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GenderType
     */
    public function getGenderType()
    {
      return $this->GenderType;
    }

    /**
     * @param GenderType $GenderType
     * @return \PMG\BingAds\CampaignMangagement\GenderCriterion
     */
    public function setGenderType($GenderType)
    {
      $this->GenderType = $GenderType;
      return $this;
    }

}
