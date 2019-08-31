<?php

namespace PMG\BingAds\AdInsight;

class DeviceCriterion extends Criterion
{

    /**
     * @var string $DeviceName
     */
    protected $DeviceName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDeviceName()
    {
        return $this->DeviceName;
    }

    /**
     * @param string $DeviceName
     * @return \PMG\BingAds\AdInsight\DeviceCriterion
     */
    public function setDeviceName($DeviceName)
    {
        $this->DeviceName = $DeviceName;
        return $this;
    }

}
