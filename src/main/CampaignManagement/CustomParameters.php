<?php

namespace PMG\BingAds\CampaignManagement;

class CustomParameters
{

    /**
     * @var ArrayOfCustomParameter $Parameters
     */
    protected $Parameters = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCustomParameter
     */
    public function getParameters()
    {
        return $this->Parameters;
    }

    /**
     * @param ArrayOfCustomParameter $Parameters
     * @return \PMG\BingAds\CampaignManagement\CustomParameters
     */
    public function setParameters($Parameters)
    {
        $this->Parameters = $Parameters;
        return $this;
    }

}
