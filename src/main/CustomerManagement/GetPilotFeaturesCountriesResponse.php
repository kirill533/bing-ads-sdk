<?php

namespace PMG\BingAds\CustomerManagement;

class GetPilotFeaturesCountriesResponse
{

    /**
     * @var ArrayOfPilotFeature $PilotFeatures
     */
    protected $PilotFeatures = null;

    /**
     * @param ArrayOfPilotFeature $PilotFeatures
     */
    public function __construct($PilotFeatures = null)
    {
    $this->PilotFeatures = $PilotFeatures;
    }

    /**
     * @return ArrayOfPilotFeature
     */
    public function getPilotFeatures()
    {
        return $this->PilotFeatures;
    }

    /**
     * @param ArrayOfPilotFeature $PilotFeatures
     * @return \PMG\BingAds\CustomerManagement\GetPilotFeaturesCountriesResponse
     */
    public function setPilotFeatures($PilotFeatures)
    {
        $this->PilotFeatures = $PilotFeatures;
        return $this;
    }

}
