<?php

namespace PMG\BingAds\CustomerManagement;

class GetCustomerPilotFeaturesResponse
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
     * @return \PMG\BingAds\CustomerManagement\GetCustomerPilotFeaturesResponse
     */
    public function setFeaturePilotFlags($FeaturePilotFlags)
    {
      $this->FeaturePilotFlags = $FeaturePilotFlags;
      return $this;
    }

}
