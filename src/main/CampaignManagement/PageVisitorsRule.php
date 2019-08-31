<?php

namespace PMG\BingAds\CampaignManagement;

class PageVisitorsRule extends RemarketingRule
{

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
    public function getRuleItemGroups()
    {
        return $this->RuleItemGroups;
    }

    /**
     * @param ArrayOfRuleItemGroup $RuleItemGroups
     * @return \PMG\BingAds\CampaignManagement\PageVisitorsRule
     */
    public function setRuleItemGroups($RuleItemGroups)
    {
        $this->RuleItemGroups = $RuleItemGroups;
        return $this;
    }

}
