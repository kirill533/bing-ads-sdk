<?php

namespace PMG\BingAds\CustomerManagement;

class Address
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Line1
     */
    protected $Line1 = null;

    /**
     * @var string $Line2
     */
    protected $Line2 = null;

    /**
     * @var string $Line3
     */
    protected $Line3 = null;

    /**
     * @var string $Line4
     */
    protected $Line4 = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $StateOrProvince
     */
    protected $StateOrProvince = null;

    /**
     * @var base64Binary $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
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
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
      return $this->Line1;
    }

    /**
     * @param string $Line1
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setLine1($Line1)
    {
      $this->Line1 = $Line1;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
      return $this->Line2;
    }

    /**
     * @param string $Line2
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setLine2($Line2)
    {
      $this->Line2 = $Line2;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine3()
    {
      return $this->Line3;
    }

    /**
     * @param string $Line3
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setLine3($Line3)
    {
      $this->Line3 = $Line3;
      return $this;
    }

    /**
     * @return string
     */
    public function getLine4()
    {
      return $this->Line4;
    }

    /**
     * @param string $Line4
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setLine4($Line4)
    {
      $this->Line4 = $Line4;
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
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
      return $this->StateOrProvince;
    }

    /**
     * @param string $StateOrProvince
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setStateOrProvince($StateOrProvince)
    {
      $this->StateOrProvince = $StateOrProvince;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getTimeStamp()
    {
      return $this->TimeStamp;
    }

    /**
     * @param base64Binary $TimeStamp
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
      return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     * @return \PMG\BingAds\CustomerManagement\Address
     */
    public function setBusinessName($BusinessName)
    {
      $this->BusinessName = $BusinessName;
      return $this;
    }

}
