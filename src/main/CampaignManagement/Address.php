<?php

namespace PMG\BingAds\CampaignManagement;

class Address
{

    /**
     * @var string $CityName
     */
    protected $CityName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $ProvinceCode
     */
    protected $ProvinceCode = null;

    /**
     * @var string $ProvinceName
     */
    protected $ProvinceName = null;

    /**
     * @var string $StreetAddress
     */
    protected $StreetAddress = null;

    /**
     * @var string $StreetAddress2
     */
    protected $StreetAddress2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->CityName;
    }

    /**
     * @param string $CityName
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setCityName($CityName)
    {
        $this->CityName = $CityName;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceCode()
    {
        return $this->ProvinceCode;
    }

    /**
     * @param string $ProvinceCode
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setProvinceCode($ProvinceCode)
    {
        $this->ProvinceCode = $ProvinceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName()
    {
        return $this->ProvinceName;
    }

    /**
     * @param string $ProvinceName
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setProvinceName($ProvinceName)
    {
        $this->ProvinceName = $ProvinceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->StreetAddress;
    }

    /**
     * @param string $StreetAddress
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setStreetAddress($StreetAddress)
    {
        $this->StreetAddress = $StreetAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->StreetAddress2;
    }

    /**
     * @param string $StreetAddress2
     * @return \PMG\BingAds\CampaignManagement\Address
     */
    public function setStreetAddress2($StreetAddress2)
    {
        $this->StreetAddress2 = $StreetAddress2;
        return $this;
    }

}
