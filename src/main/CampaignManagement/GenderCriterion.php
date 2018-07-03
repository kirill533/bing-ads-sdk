<?php

namespace PMG\BingAds\CampaignManagement;

class GenderCriterion extends Criterion
{

    /**
     * @see \PMG\BingAds\CampaignManagement\GenderType for valid values
     *
     * @var string $GenderType
     */
    protected $GenderType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getGenderType()
    {
      return $this->GenderType;
    }

    /**
     * @param string $GenderType
     * @return \PMG\BingAds\CampaignManagement\GenderCriterion
     */
    public function setGenderType($GenderType)
    {
      $this->GenderType = $GenderType;
      return $this;
    }

}
