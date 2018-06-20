<?php

namespace PMG\BingAds\CustomerBilling;

class BillingDocumentInfo
{

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
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var \DateTime $DocumentDate
     */
    protected $DocumentDate = null;

    /**
     * @var int $DocumentId
     */
    protected $DocumentId = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    
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
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
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
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
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
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate()
    {
      if ($this->DocumentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DocumentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DocumentDate
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setDocumentDate(\DateTime $DocumentDate = null)
    {
      if ($DocumentDate == null) {
       $this->DocumentDate = null;
      } else {
        $this->DocumentDate = $DocumentDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getDocumentId()
    {
      return $this->DocumentId;
    }

    /**
     * @param int $DocumentId
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setDocumentId($DocumentId)
    {
      $this->DocumentId = $DocumentId;
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
     * @return \PMG\BingAds\CustomerBilling\BillingDocumentInfo
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

}
