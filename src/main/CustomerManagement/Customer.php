<?php

namespace PMG\BingAds\CustomerManagement;

class Customer
{

    /**
     * @see \PMG\BingAds\CustomerManagement\CustomerFinancialStatus for valid values
     *
     * @var string $CustomerFinancialStatus
     */
    protected $CustomerFinancialStatus = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\Industry for valid values
     *
     * @var string $Industry
     */
    protected $Industry = null;

    /**
     * @var int $LastModifiedByUserId
     */
    protected $LastModifiedByUserId = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var string $MarketCountry
     */
    protected $MarketCountry = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\LanguageType for valid values
     *
     * @var string $MarketLanguage
     */
    protected $MarketLanguage = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\ServiceLevel for valid values
     *
     * @var string $ServiceLevel
     */
    protected $ServiceLevel = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\CustomerLifeCycleStatus for valid values
     *
     * @var string $CustomerLifeCycleStatus
     */
    protected $CustomerLifeCycleStatus = null;

    /**
     * @var string $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerFinancialStatus()
    {
      return $this->CustomerFinancialStatus;
    }

    /**
     * @param string $CustomerFinancialStatus
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setCustomerFinancialStatus($CustomerFinancialStatus)
    {
      $this->CustomerFinancialStatus = $CustomerFinancialStatus;
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
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
      return $this->Industry;
    }

    /**
     * @param string $Industry
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setIndustry($Industry)
    {
      $this->Industry = $Industry;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastModifiedByUserId()
    {
      return $this->LastModifiedByUserId;
    }

    /**
     * @param int $LastModifiedByUserId
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setLastModifiedByUserId($LastModifiedByUserId)
    {
      $this->LastModifiedByUserId = $LastModifiedByUserId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
      if ($this->LastModifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setLastModifiedTime(\DateTime $LastModifiedTime = null)
    {
      if ($LastModifiedTime == null) {
       $this->LastModifiedTime = null;
      } else {
        $this->LastModifiedTime = $LastModifiedTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketCountry()
    {
      return $this->MarketCountry;
    }

    /**
     * @param string $MarketCountry
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setMarketCountry($MarketCountry)
    {
      $this->MarketCountry = $MarketCountry;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
      return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketLanguage()
    {
      return $this->MarketLanguage;
    }

    /**
     * @param string $MarketLanguage
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setMarketLanguage($MarketLanguage)
    {
      $this->MarketLanguage = $MarketLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceLevel()
    {
      return $this->ServiceLevel;
    }

    /**
     * @param string $ServiceLevel
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setServiceLevel($ServiceLevel)
    {
      $this->ServiceLevel = $ServiceLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLifeCycleStatus()
    {
      return $this->CustomerLifeCycleStatus;
    }

    /**
     * @param string $CustomerLifeCycleStatus
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setCustomerLifeCycleStatus($CustomerLifeCycleStatus)
    {
      $this->CustomerLifeCycleStatus = $CustomerLifeCycleStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeStamp()
    {
      return $this->TimeStamp;
    }

    /**
     * @param string $TimeStamp
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \PMG\BingAds\CustomerManagement\Customer
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
