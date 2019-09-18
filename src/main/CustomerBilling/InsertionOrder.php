<?php

namespace PMG\BingAds\CustomerBilling;

class InsertionOrder
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

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
     * @var InsertionOrderStatus $Status
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

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var float $BudgetRemaining
     */
    protected $BudgetRemaining = null;

    /**
     * @var float $BudgetSpent
     */
    protected $BudgetSpent = null;

    /**
     * @var float $BudgetRemainingPercent
     */
    protected $BudgetRemainingPercent = null;

    /**
     * @var float $BudgetSpentPercent
     */
    protected $BudgetSpentPercent = null;

    /**
     * @var string $SeriesName
     */
    protected $SeriesName = null;

    /**
     * @var boolean $IsInSeries
     */
    protected $IsInSeries = null;

    /**
     * @var string $SeriesFrequencyType
     */
    protected $SeriesFrequencyType = null;

    
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
        if (null === $this->EndDate) {
            return $this->EndDate;
        }
        try {
            return new \DateTime($this->EndDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
        $this->EndDate = null === $EndDate ? null : $EndDate->format(\DateTime::ATOM);
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
        if (null === $this->LastModifiedTime) {
            return $this->LastModifiedTime;
        }
        try {
            return new \DateTime($this->LastModifiedTime);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setLastModifiedTime(\DateTime $LastModifiedTime = null)
    {
        $this->LastModifiedTime = null === $LastModifiedTime ? null : $LastModifiedTime->format(\DateTime::ATOM);
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
        if (null === $this->StartDate) {
            return $this->StartDate;
        }
        try {
            return new \DateTime($this->StartDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
        $this->StartDate = null === $StartDate ? null : $StartDate->format(\DateTime::ATOM);
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
     * @return InsertionOrderStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param InsertionOrderStatus $Status
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

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetRemaining()
    {
        return $this->BudgetRemaining;
    }

    /**
     * @param float $BudgetRemaining
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBudgetRemaining($BudgetRemaining)
    {
        $this->BudgetRemaining = $BudgetRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetSpent()
    {
        return $this->BudgetSpent;
    }

    /**
     * @param float $BudgetSpent
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBudgetSpent($BudgetSpent)
    {
        $this->BudgetSpent = $BudgetSpent;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetRemainingPercent()
    {
        return $this->BudgetRemainingPercent;
    }

    /**
     * @param float $BudgetRemainingPercent
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBudgetRemainingPercent($BudgetRemainingPercent)
    {
        $this->BudgetRemainingPercent = $BudgetRemainingPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetSpentPercent()
    {
        return $this->BudgetSpentPercent;
    }

    /**
     * @param float $BudgetSpentPercent
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setBudgetSpentPercent($BudgetSpentPercent)
    {
        $this->BudgetSpentPercent = $BudgetSpentPercent;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
        return $this->SeriesName;
    }

    /**
     * @param string $SeriesName
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setSeriesName($SeriesName)
    {
        $this->SeriesName = $SeriesName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInSeries()
    {
        return $this->IsInSeries;
    }

    /**
     * @param boolean $IsInSeries
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setIsInSeries($IsInSeries)
    {
        $this->IsInSeries = $IsInSeries;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeriesFrequencyType()
    {
        return $this->SeriesFrequencyType;
    }

    /**
     * @param string $SeriesFrequencyType
     * @return \PMG\BingAds\CustomerBilling\InsertionOrder
     */
    public function setSeriesFrequencyType($SeriesFrequencyType)
    {
        $this->SeriesFrequencyType = $SeriesFrequencyType;
        return $this;
    }

}
