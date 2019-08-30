<?php

namespace PMG\BingAds\AdInsight;

class DeviceSearchParameter extends SearchParameter
{

    /**
     * @var DeviceCriterion $Device
     */
    protected $Device = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceCriterion
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param DeviceCriterion $Device
     * @return \PMG\BingAds\AdInsight\DeviceSearchParameter
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

}
