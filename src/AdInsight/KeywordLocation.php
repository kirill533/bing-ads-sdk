<?php

namespace PMG\BingAds\AdInsight;

class KeywordLocation
{

    /**
     * @var string $Device
     */
    protected $Device = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var float $Percentage
     */
    protected $Percentage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDevice()
    {
      return $this->Device;
    }

    /**
     * @param string $Device
     * @return \PMG\BingAds\AdInsight\KeywordLocation
     */
    public function setDevice($Device)
    {
      $this->Device = $Device;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \PMG\BingAds\AdInsight\KeywordLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param float $Percentage
     * @return \PMG\BingAds\AdInsight\KeywordLocation
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
