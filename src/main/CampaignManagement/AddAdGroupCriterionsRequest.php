<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdGroupCriterionsRequest
{

    /**
     * @var ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    protected $AdGroupCriterions = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdGroupCriterionType for valid values
     *
     * @var list $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     * @param list $CriterionType
     */
    public function __construct($AdGroupCriterions = null, $CriterionType = null)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
      $this->CriterionType = $CriterionType;
    }

    /**
     * @return ArrayOfAdGroupCriterion
     */
    public function getAdGroupCriterions()
    {
      return $this->AdGroupCriterions;
    }

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupCriterionsRequest
     */
    public function setAdGroupCriterions($AdGroupCriterions)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
      return $this;
    }

    /**
     * @return list
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param list $CriterionType
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
