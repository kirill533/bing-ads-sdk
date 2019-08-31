<?php

namespace PMG\BingAds\CustomerManagement;

class SignupCustomerResponse
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var \DateTime $CreateTime
     */
    protected $CreateTime = null;

    /**
     * @param int $CustomerId
     * @param string $CustomerNumber
     * @param int $AccountId
     * @param string $AccountNumber
     * @param \DateTime $CreateTime
     */
    public function __construct($CustomerId = null, $CustomerNumber = null, $AccountId = null, $AccountNumber = null, \DateTime $CreateTime = null)
    {
    $this->CustomerId = $CustomerId;
    $this->CustomerNumber = $CustomerNumber;
    $this->AccountId = $AccountId;
    $this->AccountNumber = $AccountNumber;
        $this->CreateTime = null === $CreateTime ? null : $CreateTime->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerResponse
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerResponse
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
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
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerResponse
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerResponse
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTime()
    {
        if (null === $this->CreateTime) {
            return $this->CreateTime;
        }
        try {
            return new \DateTime($this->CreateTime);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $CreateTime
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerResponse
     */
    public function setCreateTime(\DateTime $CreateTime)
    {
        $this->CreateTime = $CreateTime->format(\DateTime::ATOM);
        return $this;
    }

}
