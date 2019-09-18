<?php

namespace PMG\BingAds\CustomerManagement;

class GetAccountPilotFeaturesResponse
{

    /**
     * @var ArrayOfint $FeaturePilotFlags
     */
    protected $FeaturePilotFlags = null;

    /**
     * @param ArrayOfint $FeaturePilotFlags
     */
    public function __construct($FeaturePilotFlags = null)
    {
    $this->FeaturePilotFlags = $FeaturePilotFlags;
    }

    /**
     * @return ArrayOfint
     */
    public function getFeaturePilotFlags()
    {
        return $this->FeaturePilotFlags;
    }

    /**
     * @param ArrayOfint $FeaturePilotFlags
     * @return \PMG\BingAds\CustomerManagement\GetAccountPilotFeaturesResponse
     */
    public function setFeaturePilotFlags($FeaturePilotFlags)
    {
        $this->FeaturePilotFlags = $FeaturePilotFlags;
        return $this;
    }

}
