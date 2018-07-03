<?php

namespace PMG\BingAds\CustomerBilling;

class InsertionOrder
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var float $BalanceAmount
     */
    protected $BalanceAmount = null;

    /**
     * @var string $BookingCountryCode
     */
    protected $BookingCountryCode = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $LastModifiedByUserId
     */
    protected $LastModifiedByUserId = null;

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @var float $NotificationThreshold
     */
    protected $NotificationThreshold = null;

    /**
     * @var int $ReferenceId
     */
    protected $ReferenceId = null;

    /**
     * @var float $SpendCapAmount
     */
    protected $SpendCapAmount = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @see \PMG\BingAds\CustomerBilling\InsertionOrderStatus for valid values
     *
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    /**
     * @var InsertionOrderPendingChanges $PendingChanges
     */
    protected $PendingChanges = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalanceAmount()
    {
      return $this->BalanceAmount;
    }

    /**
     * @param float $BalanceAmount
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBalanceAmount($BalanceAmount)
    {
      $this->BalanceAmount = $BalanceAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCountryCode()
    {
      return $this->BookingCountryCode;
    }

    /**
     * @param string $BookingCountryCode
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBookingCountryCode($BookingCountryCode)
    {
      $this->BookingCountryCode = $BookingCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
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
     * @return float
     */
    public function getNotificationThreshold()
    {
      return $this->NotificationThreshold;
    }

    /**
     * @param float $NotificationThreshold
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setNotificationThreshold($NotificationThreshold)
    {
      $this->NotificationThreshold = $NotificationThreshold;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceId()
    {
      return $this->ReferenceId;
    }

    /**
     * @param int $ReferenceId
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setReferenceId($ReferenceId)
    {
      $this->ReferenceId = $ReferenceId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpendCapAmount()
    {
      return $this->SpendCapAmount;
    }

    /**
     * @param float $SpendCapAmount
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setSpendCapAmount($SpendCapAmount)
    {
      $this->SpendCapAmount = $SpendCapAmount;
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
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
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrder()
    {
      return $this->PurchaseOrder;
    }

    /**
     * @param string $PurchaseOrder
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

    /**
     * @return InsertionOrderPendingChanges
     */
    public function getPendingChanges()
    {
      return $this->PendingChanges;
    }

    /**
     * @param InsertionOrderPendingChanges $PendingChanges
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setPendingChanges($PendingChanges)
    {
      $this->PendingChanges = $PendingChanges;
      return $this;
    }

}
