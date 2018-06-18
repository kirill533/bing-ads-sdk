<?php

namespace PMG\BingAds\CampaignMangagement;

class PageVisitorsWhoVisitedAnotherPageRule extends RemarketingRule
{

    /**
     * @var ArrayOfRuleItemGroup $AnotherRuleItemGroups
     */
    protected $AnotherRuleItemGroups = null;

    /**
     * @var ArrayOfRuleItemGroup $RuleItemGroups
     */
    protected $RuleItemGroups = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfRuleItemGroup
     */
    public function getAnotherRuleItemGroups()
    {
      return $this->AnotherRuleItemGroups;
    }

    /**
     * @param ArrayOfRuleItemGroup $AnotherRuleItemGroups
     * @return \PMG\BingAds\CampaignMangagement\PageVisitorsWhoVisitedAnotherPageRule
     */
    public function setAnotherRuleItemGroups($AnotherRuleItemGroups)
    {
      $this->AnotherRuleItemGroups = $AnotherRuleItemGroups;
      return $this;
    }

    /**
     * @return ArrayOfRuleItemGroup
     */
    public function getRuleItemGroups()
    {
      return $this->RuleItemGroups;
    }

    /**
     * @param ArrayOfRuleItemGroup $RuleItemGroups
     * @return \PMG\BingAds\CampaignMangagement\PageVisitorsWhoVisitedAnotherPageRule
     */
    public function setRuleItemGroups($RuleItemGroups)
    {
      $this->RuleItemGroups = $RuleItemGroups;
      return $this;
    }

}
