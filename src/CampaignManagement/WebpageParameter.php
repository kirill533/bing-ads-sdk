<?php

namespace PMG\BingAds\CampaignMangagement;

class WebpageParameter
{

    /**
     * @var ArrayOfWebpageCondition $Conditions
     */
    protected $Conditions = null;

    /**
     * @var string $CriterionName
     */
    protected $CriterionName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfWebpageCondition
     */
    public function getConditions()
    {
      return $this->Conditions;
    }

    /**
     * @param ArrayOfWebpageCondition $Conditions
     * @return \PMG\BingAds\CampaignMangagement\WebpageParameter
     */
    public function setConditions($Conditions)
    {
      $this->Conditions = $Conditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCriterionName()
    {
      return $this->CriterionName;
    }

    /**
     * @param string $CriterionName
     * @return \PMG\BingAds\CampaignMangagement\WebpageParameter
     */
    public function setCriterionName($CriterionName)
    {
      $this->CriterionName = $CriterionName;
      return $this;
    }

}
