<?php

namespace PMG\BingAds\CustomerManagement;

class User
{

    /**
     * @var ContactInfo $ContactInfo
     */
    protected $ContactInfo = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $JobTitle
     */
    protected $JobTitle = null;

    /**
     * @var int $LastModifiedByUserId
     */
    protected $LastModifiedByUserId = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var LCID $Lcid
     */
    protected $Lcid = null;

    /**
     * @var PersonName $Name
     */
    protected $Name = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $SecretAnswer
     */
    protected $SecretAnswer = null;

    /**
     * @var SecretQuestion $SecretQuestion
     */
    protected $SecretQuestion = null;

    /**
     * @var UserLifeCycleStatus $UserLifeCycleStatus
     */
    protected $UserLifeCycleStatus = null;

    /**
     * @var string $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactInfo
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param ContactInfo $ContactInfo
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setContactInfo($ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
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
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
      return $this->JobTitle;
    }

    /**
     * @param string $JobTitle
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setJobTitle($JobTitle)
    {
      $this->JobTitle = $JobTitle;
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
     * @return \PMG\BingAds\CustomerManagement\User
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
     * @return \PMG\BingAds\CustomerManagement\User
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
     * @return LCID
     */
    public function getLcid()
    {
      return $this->Lcid;
    }

    /**
     * @param LCID $Lcid
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setLcid($Lcid)
    {
      $this->Lcid = $Lcid;
      return $this;
    }

    /**
     * @return PersonName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param PersonName $Name
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecretAnswer()
    {
      return $this->SecretAnswer;
    }

    /**
     * @param string $SecretAnswer
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setSecretAnswer($SecretAnswer)
    {
      $this->SecretAnswer = $SecretAnswer;
      return $this;
    }

    /**
     * @return SecretQuestion
     */
    public function getSecretQuestion()
    {
      return $this->SecretQuestion;
    }

    /**
     * @param SecretQuestion $SecretQuestion
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setSecretQuestion($SecretQuestion)
    {
      $this->SecretQuestion = $SecretQuestion;
      return $this;
    }

    /**
     * @return UserLifeCycleStatus
     */
    public function getUserLifeCycleStatus()
    {
      return $this->UserLifeCycleStatus;
    }

    /**
     * @param UserLifeCycleStatus $UserLifeCycleStatus
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setUserLifeCycleStatus($UserLifeCycleStatus)
    {
      $this->UserLifeCycleStatus = $UserLifeCycleStatus;
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
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
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
     * @return \PMG\BingAds\CustomerManagement\User
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

}
