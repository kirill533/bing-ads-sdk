<?php

namespace PMG\BingAds\CampaignManagement;

class RemarketingRule
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\RemarketingRule
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
