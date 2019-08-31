<?php

namespace PMG\BingAds\AdInsight;

class LocationSearchParameter extends SearchParameter
{

    /**
     * @var ArrayOfLocationCriterion $Locations
     */
    protected $Locations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLocationCriterion
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param ArrayOfLocationCriterion $Locations
     * @return \PMG\BingAds\AdInsight\LocationSearchParameter
     */
    public function setLocations($Locations)
    {
        $this->Locations = $Locations;
        return $this;
    }

}
