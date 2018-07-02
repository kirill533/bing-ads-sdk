<?php

namespace PMG\BingAds\CustomerManagement;

class ClientLink
{

    /**
     * @var int $ClientAccountId
     */
    protected $ClientAccountId = null;

    /**
     * @var string $ClientAccountNumber
     */
    protected $ClientAccountNumber = null;

    /**
     * @var int $ManagingCustomerId
     */
    protected $ManagingCustomerId = null;

    /**
     * @var string $ManagingCustomerNumber
     */
    protected $ManagingCustomerNumber = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $InviterEmail
     */
    protected $InviterEmail = null;

    /**
     * @var string $InviterName
     */
    protected $InviterName = null;

    /**
     * @var string $InviterPhone
     */
    protected $InviterPhone = null;

    /**
     * @var boolean $IsBillToClient
     */
    protected $IsBillToClient = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var ClientLinkStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $SuppressNotification
     */
    protected $SuppressNotification = null;

    /**
     * @var \DateTime $LastModifiedDateTime
     */
    protected $LastModifiedDateTime = null;

    /**
     * @var int $LastModifiedByUserId
     */
    protected $LastModifiedByUserId = null;

    /**
     * @var base64Binary $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getClientAccountId()
    {
      return $this->ClientAccountId;
    }

    /**
     * @param int $ClientAccountId
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setClientAccountId($ClientAccountId)
    {
      $this->ClientAccountId = $ClientAccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientAccountNumber()
    {
      return $this->ClientAccountNumber;
    }

    /**
     * @param string $ClientAccountNumber
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setClientAccountNumber($ClientAccountNumber)
    {
      $this->ClientAccountNumber = $ClientAccountNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getManagingCustomerId()
    {
      return $this->ManagingCustomerId;
    }

    /**
     * @param int $ManagingCustomerId
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setManagingCustomerId($ManagingCustomerId)
    {
      $this->ManagingCustomerId = $ManagingCustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getManagingCustomerNumber()
    {
      return $this->ManagingCustomerNumber;
    }

    /**
     * @param string $ManagingCustomerNumber
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setManagingCustomerNumber($ManagingCustomerNumber)
    {
      $this->ManagingCustomerNumber = $ManagingCustomerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
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
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getInviterEmail()
    {
      return $this->InviterEmail;
    }

    /**
     * @param string $InviterEmail
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setInviterEmail($InviterEmail)
    {
      $this->InviterEmail = $InviterEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getInviterName()
    {
      return $this->InviterName;
    }

    /**
     * @param string $InviterName
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setInviterName($InviterName)
    {
      $this->InviterName = $InviterName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInviterPhone()
    {
      return $this->InviterPhone;
    }

    /**
     * @param string $InviterPhone
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setInviterPhone($InviterPhone)
    {
      $this->InviterPhone = $InviterPhone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBillToClient()
    {
      return $this->IsBillToClient;
    }

    /**
     * @param boolean $IsBillToClient
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setIsBillToClient($IsBillToClient)
    {
      $this->IsBillToClient = $IsBillToClient;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ClientLinkStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ClientLinkStatus $Status
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressNotification()
    {
      return $this->SuppressNotification;
    }

    /**
     * @param boolean $SuppressNotification
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setSuppressNotification($SuppressNotification)
    {
      $this->SuppressNotification = $SuppressNotification;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDateTime()
    {
      if ($this->LastModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDateTime
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setLastModifiedDateTime(\DateTime $LastModifiedDateTime = null)
    {
      if ($LastModifiedDateTime == null) {
       $this->LastModifiedDateTime = null;
      } else {
        $this->LastModifiedDateTime = $LastModifiedDateTime->format(\DateTime::ATOM);
      }
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
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setLastModifiedByUserId($LastModifiedByUserId)
    {
      $this->LastModifiedByUserId = $LastModifiedByUserId;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getTimestamp()
    {
      return $this->Timestamp;
    }

    /**
     * @param base64Binary $Timestamp
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setTimestamp($Timestamp)
    {
      $this->Timestamp = $Timestamp;
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
     * @return \PMG\BingAds\CustomerManagement\ClientLink
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

}
