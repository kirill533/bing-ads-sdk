<?php

namespace PMG\BingAds\CustomerManagement;

class AccountInfoWithCustomerData
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var AccountLifeCycleStatus $AccountLifeCycleStatus
     */
    protected $AccountLifeCycleStatus = null;

    /**
     * @var int $PauseReason
     */
    protected $PauseReason = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;
        return $this;
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
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
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
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return AccountLifeCycleStatus
     */
    public function getAccountLifeCycleStatus()
    {
        return $this->AccountLifeCycleStatus;
    }

    /**
     * @param AccountLifeCycleStatus $AccountLifeCycleStatus
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setAccountLifeCycleStatus($AccountLifeCycleStatus)
    {
        $this->AccountLifeCycleStatus = $AccountLifeCycleStatus;
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
     * @return \PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData
     */
    public function setPauseReason($PauseReason)
    {
        $this->PauseReason = $PauseReason;
        return $this;
    }

}
