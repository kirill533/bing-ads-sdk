<?php

namespace PMG\BingAds\CustomerManagement;

class AdvertiserAccount
{

    /**
     * @var int $BillToCustomerId
     */
    protected $BillToCustomerId = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\CurrencyCode for valid values
     *
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\AccountFinancialStatus for valid values
     *
     * @var string $AccountFinancialStatus
     */
    protected $AccountFinancialStatus = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\LanguageType for valid values
     *
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var int $LastModifiedByUserId
     */
    protected $LastModifiedByUserId = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var int $ParentCustomerId
     */
    protected $ParentCustomerId = null;

    /**
     * @var int $PaymentMethodId
     */
    protected $PaymentMethodId = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\PaymentMethodType for valid values
     *
     * @var string $PaymentMethodType
     */
    protected $PaymentMethodType = null;

    /**
     * @var int $PrimaryUserId
     */
    protected $PrimaryUserId = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\AccountLifeCycleStatus for valid values
     *
     * @var string $AccountLifeCycleStatus
     */
    protected $AccountLifeCycleStatus = null;

    /**
     * @var string $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\TimeZoneType for valid values
     *
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var int $PauseReason
     */
    protected $PauseReason = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var ArrayOfCustomerInfo $LinkedAgencies
     */
    protected $LinkedAgencies = null;

    /**
     * @var int $SalesHouseCustomerId
     */
    protected $SalesHouseCustomerId = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $TaxInformation
     */
    protected $TaxInformation = null;

    /**
     * @var int $BackUpPaymentInstrumentId
     */
    protected $BackUpPaymentInstrumentId = null;

    /**
     * @var float $BillingThresholdAmount
     */
    protected $BillingThresholdAmount = null;

    /**
     * @var Address $BusinessAddress
     */
    protected $BusinessAddress = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\AutoTagType for valid values
     *
     * @var string $AutoTagType
     */
    protected $AutoTagType = null;

    /**
     * @var int $SoldToPaymentInstrumentId
     */
    protected $SoldToPaymentInstrumentId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBillToCustomerId()
    {
      return $this->BillToCustomerId;
    }

    /**
     * @param int $BillToCustomerId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setBillToCustomerId($BillToCustomerId)
    {
      $this->BillToCustomerId = $BillToCustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountFinancialStatus()
    {
      return $this->AccountFinancialStatus;
    }

    /**
     * @param string $AccountFinancialStatus
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setAccountFinancialStatus($AccountFinancialStatus)
    {
      $this->AccountFinancialStatus = $AccountFinancialStatus;
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
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
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentCustomerId()
    {
      return $this->ParentCustomerId;
    }

    /**
     * @param int $ParentCustomerId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setParentCustomerId($ParentCustomerId)
    {
      $this->ParentCustomerId = $ParentCustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodId()
    {
      return $this->PaymentMethodId;
    }

    /**
     * @param int $PaymentMethodId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setPaymentMethodId($PaymentMethodId)
    {
      $this->PaymentMethodId = $PaymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodType()
    {
      return $this->PaymentMethodType;
    }

    /**
     * @param string $PaymentMethodType
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setPaymentMethodType($PaymentMethodType)
    {
      $this->PaymentMethodType = $PaymentMethodType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryUserId()
    {
      return $this->PrimaryUserId;
    }

    /**
     * @param int $PrimaryUserId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setPrimaryUserId($PrimaryUserId)
    {
      $this->PrimaryUserId = $PrimaryUserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountLifeCycleStatus()
    {
      return $this->AccountLifeCycleStatus;
    }

    /**
     * @param string $AccountLifeCycleStatus
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setAccountLifeCycleStatus($AccountLifeCycleStatus)
    {
      $this->AccountLifeCycleStatus = $AccountLifeCycleStatus;
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

    /**
     * @return int
     */
    public function getPauseReason()
    {
      return $this->PauseReason;
    }

    /**
     * @param int $PauseReason
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setPauseReason($PauseReason)
    {
      $this->PauseReason = $PauseReason;
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
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

    /**
     * @return ArrayOfCustomerInfo
     */
    public function getLinkedAgencies()
    {
      return $this->LinkedAgencies;
    }

    /**
     * @param ArrayOfCustomerInfo $LinkedAgencies
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setLinkedAgencies($LinkedAgencies)
    {
      $this->LinkedAgencies = $LinkedAgencies;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesHouseCustomerId()
    {
      return $this->SalesHouseCustomerId;
    }

    /**
     * @param int $SalesHouseCustomerId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setSalesHouseCustomerId($SalesHouseCustomerId)
    {
      $this->SalesHouseCustomerId = $SalesHouseCustomerId;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getTaxInformation()
    {
      return $this->TaxInformation;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $TaxInformation
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setTaxInformation($TaxInformation)
    {
      $this->TaxInformation = $TaxInformation;
      return $this;
    }

    /**
     * @return int
     */
    public function getBackUpPaymentInstrumentId()
    {
      return $this->BackUpPaymentInstrumentId;
    }

    /**
     * @param int $BackUpPaymentInstrumentId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setBackUpPaymentInstrumentId($BackUpPaymentInstrumentId)
    {
      $this->BackUpPaymentInstrumentId = $BackUpPaymentInstrumentId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBillingThresholdAmount()
    {
      return $this->BillingThresholdAmount;
    }

    /**
     * @param float $BillingThresholdAmount
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setBillingThresholdAmount($BillingThresholdAmount)
    {
      $this->BillingThresholdAmount = $BillingThresholdAmount;
      return $this;
    }

    /**
     * @return Address
     */
    public function getBusinessAddress()
    {
      return $this->BusinessAddress;
    }

    /**
     * @param Address $BusinessAddress
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setBusinessAddress($BusinessAddress)
    {
      $this->BusinessAddress = $BusinessAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutoTagType()
    {
      return $this->AutoTagType;
    }

    /**
     * @param string $AutoTagType
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setAutoTagType($AutoTagType)
    {
      $this->AutoTagType = $AutoTagType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSoldToPaymentInstrumentId()
    {
      return $this->SoldToPaymentInstrumentId;
    }

    /**
     * @param int $SoldToPaymentInstrumentId
     * @return \PMG\BingAds\CustomerManagement\AdvertiserAccount
     */
    public function setSoldToPaymentInstrumentId($SoldToPaymentInstrumentId)
    {
      $this->SoldToPaymentInstrumentId = $SoldToPaymentInstrumentId;
      return $this;
    }

}
