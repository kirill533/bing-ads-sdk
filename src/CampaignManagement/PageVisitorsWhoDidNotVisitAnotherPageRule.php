<?php

namespace PMG\BingAds\CampaignMangagement;

class PageVisitorsWhoDidNotVisitAnotherPageRule extends RemarketingRule
{

    /**
     * @var ArrayOfRuleItemGroup $ExcludeRuleItemGroups
     */
    protected $ExcludeRuleItemGroups = null;

    /**
     * @var ArrayOfRuleItemGroup $IncludeRuleItemGroups
     */
    protected $IncludeRuleItemGroups = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfRuleItemGroup
     */
    public function getExcludeRuleItemGroups()
    {
      return $this->ExcludeRuleItemGroups;
    }

    /**
     * @param ArrayOfRuleItemGroup $ExcludeRuleItemGroups
     * @return \PMG\BingAds\CampaignMangagement\PageVisitorsWhoDidNotVisitAnotherPageRule
     */
    public function setExcludeRuleItemGroups($ExcludeRuleItemGroups)
    {
      $this->ExcludeRuleItemGroups = $ExcludeRuleItemGroups;
      return $this;
    }

    /**
     * @return ArrayOfRuleItemGroup
     */
    public function getIncludeRuleItemGroups()
    {
      return $this->IncludeRuleItemGroups;
    }

    /**
     * @param ArrayOfRuleItemGroup $IncludeRuleItemGroups
     * @return \PMG\BingAds\CampaignMangagement\PageVisitorsWhoDidNotVisitAnotherPageRule
     */
    public function setIncludeRuleItemGroups($IncludeRuleItemGroups)
    {
      $this->IncludeRuleItemGroups = $IncludeRuleItemGroups;
      return $this;
    }

}
