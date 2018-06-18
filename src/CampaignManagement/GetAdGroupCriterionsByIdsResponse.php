<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdGroupCriterionsByIdsResponse
{

    /**
     * @var ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    protected $AdGroupCriterions = null;

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    public function __construct($AdGroupCriterions)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdGroupCriterionsByIdsResponse
     */
    public function setAdGroupCriterions($AdGroupCriterions)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
      return $this;
    }

}
