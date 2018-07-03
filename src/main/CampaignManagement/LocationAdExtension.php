<?php

namespace PMG\BingAds\CampaignManagement;

class LocationAdExtension extends AdExtension
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var BusinessGeoCodeStatus $GeoCodeStatus
     */
    protected $GeoCodeStatus = null;

    /**
     * @var GeoPoint $GeoPoint
     */
    protected $GeoPoint = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \PMG\BingAds\CampaignManagement\LocationAdExtension
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \PMG\BingAds\CampaignManagement\LocationAdExtension
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return BusinessGeoCodeStatus
     */
    public function getGeoCodeStatus()
    {
      return $this->GeoCodeStatus;
    }

    /**
     * @param BusinessGeoCodeStatus $GeoCodeStatus
     * @return \PMG\BingAds\CampaignManagement\LocationAdExtension
     */
    public function setGeoCodeStatus($GeoCodeStatus)
    {
      $this->GeoCodeStatus = $GeoCodeStatus;
      return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeoPoint()
    {
      return $this->GeoPoint;
    }

    /**
     * @param GeoPoint $GeoPoint
     * @return \PMG\BingAds\CampaignManagement\LocationAdExtension
     */
    public function setGeoPoint($GeoPoint)
    {
      $this->GeoPoint = $GeoPoint;
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
     * @return \PMG\BingAds\CampaignManagement\LocationAdExtension
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
