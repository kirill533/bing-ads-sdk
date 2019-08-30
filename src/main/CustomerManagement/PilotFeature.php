<?php

namespace PMG\BingAds\CustomerManagement;

class PilotFeature
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var ArrayOfstring $Countries
     */
    protected $Countries = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CustomerManagement\PilotFeature
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCountries()
    {
        return $this->Countries;
    }

    /**
     * @param ArrayOfstring $Countries
     * @return \PMG\BingAds\CustomerManagement\PilotFeature
     */
    public function setCountries($Countries)
    {
        $this->Countries = $Countries;
        return $this;
    }

}
