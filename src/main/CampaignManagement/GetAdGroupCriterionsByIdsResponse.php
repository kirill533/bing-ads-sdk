<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdGroupCriterionsByIdsResponse
{

    /**
     * @var ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    protected $AdGroupCriterions = null;

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    public function __construct($AdGroupCriterions = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupCriterionsByIdsResponse
     */
    public function setAdGroupCriterions($AdGroupCriterions)
    {
        $this->AdGroupCriterions = $AdGroupCriterions;
        return $this;
    }

}
