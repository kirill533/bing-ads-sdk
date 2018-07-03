<?php

namespace PMG\BingAds\CustomerManagement;

class ContactInfo
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var boolean $ContactByPhone
     */
    protected $ContactByPhone = null;

    /**
     * @var boolean $ContactByPostalMail
     */
    protected $ContactByPostalMail = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\EmailFormat for valid values
     *
     * @var string $EmailFormat
     */
    protected $EmailFormat = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $HomePhone
     */
    protected $HomePhone = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Mobile
     */
    protected $Mobile = null;

    /**
     * @var string $Phone1
     */
    protected $Phone1 = null;

    /**
     * @var string $Phone2
     */
    protected $Phone2 = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContactByPhone()
    {
      return $this->ContactByPhone;
    }

    /**
     * @param boolean $ContactByPhone
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setContactByPhone($ContactByPhone)
    {
      $this->ContactByPhone = $ContactByPhone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContactByPostalMail()
    {
      return $this->ContactByPostalMail;
    }

    /**
     * @param boolean $ContactByPostalMail
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setContactByPostalMail($ContactByPostalMail)
    {
      $this->ContactByPostalMail = $ContactByPostalMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailFormat()
    {
      return $this->EmailFormat;
    }

    /**
     * @param string $EmailFormat
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setEmailFormat($EmailFormat)
    {
      $this->EmailFormat = $EmailFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
      return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setHomePhone($HomePhone)
    {
      $this->HomePhone = $HomePhone;
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
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
      return $this->Mobile;
    }

    /**
     * @param string $Mobile
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setMobile($Mobile)
    {
      $this->Mobile = $Mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone1()
    {
      return $this->Phone1;
    }

    /**
     * @param string $Phone1
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setPhone1($Phone1)
    {
      $this->Phone1 = $Phone1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone2()
    {
      return $this->Phone2;
    }

    /**
     * @param string $Phone2
     * @return \PMG\BingAds\CustomerManagement\ContactInfo
     */
    public function setPhone2($Phone2)
    {
      $this->Phone2 = $Phone2;
      return $this;
    }

}
