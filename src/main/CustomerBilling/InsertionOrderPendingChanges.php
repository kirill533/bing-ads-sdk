<?php

namespace PMG\BingAds\CustomerBilling;

class InsertionOrderPendingChanges
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $RequestedByUserId
     */
    protected $RequestedByUserId = null;

    /**
     * @var \DateTime $ModifiedDateTime
     */
    protected $ModifiedDateTime = null;

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
     * @var string $PurchaseOrder
     */
    protected $PurchaseOrder = null;

    /**
     * @var InsertionOrderPendingChangesStatus $ChangeStatus
     */
    protected $ChangeStatus = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
    public function getRequestedByUserId()
    {
      return $this->RequestedByUserId;
    }

    /**
     * @param int $RequestedByUserId
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
     */
    public function setRequestedByUserId($RequestedByUserId)
    {
      $this->RequestedByUserId = $RequestedByUserId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDateTime()
    {
      if ($this->ModifiedDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDateTime
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
     */
    public function setModifiedDateTime(\DateTime $ModifiedDateTime = null)
    {
      if ($ModifiedDateTime == null) {
       $this->ModifiedDateTime = null;
      } else {
        $this->ModifiedDateTime = $ModifiedDateTime->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
     */
    public function setPurchaseOrder($PurchaseOrder)
    {
      $this->PurchaseOrder = $PurchaseOrder;
      return $this;
    }

    /**
     * @return InsertionOrderPendingChangesStatus
     */
    public function getChangeStatus()
    {
      return $this->ChangeStatus;
    }

    /**
     * @param InsertionOrderPendingChangesStatus $ChangeStatus
     * @return \PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges
     */
    public function setChangeStatus($ChangeStatus)
    {
      $this->ChangeStatus = $ChangeStatus;
      return $this;
    }

}
