<?php

namespace PMG\BingAds\CampaignManagement;

class ImportOption
{

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
        return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\ImportOption
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\ImportOption
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
