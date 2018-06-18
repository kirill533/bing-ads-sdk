<?php

namespace PMG\BingAds\CampaignMangagement;

class RuleItemGroup
{

    /**
     * @var ArrayOfRuleItem $Items
     */
    protected $Items = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRuleItem
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfRuleItem $Items
     * @return \PMG\BingAds\CampaignMangagement\RuleItemGroup
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

}
