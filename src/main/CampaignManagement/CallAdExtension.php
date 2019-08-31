<?php

namespace PMG\BingAds\CampaignManagement;

class CallAdExtension extends AdExtension
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var boolean $IsCallOnly
     */
    protected $IsCallOnly = null;

    /**
     * @var boolean $IsCallTrackingEnabled
     */
    protected $IsCallTrackingEnabled = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var boolean $RequireTollFreeTrackingNumber
     */
    protected $RequireTollFreeTrackingNumber = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \PMG\BingAds\CampaignManagement\CallAdExtension
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCallOnly()
    {
        return $this->IsCallOnly;
    }

    /**
     * @param boolean $IsCallOnly
     * @return \PMG\BingAds\CampaignManagement\CallAdExtension
     */
    public function setIsCallOnly($IsCallOnly)
    {
        $this->IsCallOnly = $IsCallOnly;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCallTrackingEnabled()
    {
        return $this->IsCallTrackingEnabled;
    }

    /**
     * @param boolean $IsCallTrackingEnabled
     * @return \PMG\BingAds\CampaignManagement\CallAdExtension
     */
    public function setIsCallTrackingEnabled($IsCallTrackingEnabled)
    {
        $this->IsCallTrackingEnabled = $IsCallTrackingEnabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \PMG\BingAds\CampaignManagement\CallAdExtension
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRequireTollFreeTrackingNumber()
    {
        return $this->RequireTollFreeTrackingNumber;
    }

    /**
     * @param boolean $RequireTollFreeTrackingNumber
     * @return \PMG\BingAds\CampaignManagement\CallAdExtension
     */
    public function setRequireTollFreeTrackingNumber($RequireTollFreeTrackingNumber)
    {
        $this->RequireTollFreeTrackingNumber = $RequireTollFreeTrackingNumber;
        return $this;
    }

}
