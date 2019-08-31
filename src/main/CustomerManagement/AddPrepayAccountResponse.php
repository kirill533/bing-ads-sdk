<?php

namespace PMG\BingAds\CustomerManagement;

class AddPrepayAccountResponse
{

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
     * @param int $AccountId
     * @param string $AccountNumber
     * @param \DateTime $CreateTime
     */
    public function __construct($AccountId = null, $AccountNumber = null, \DateTime $CreateTime = null)
    {
    $this->AccountId = $AccountId;
    $this->AccountNumber = $AccountNumber;
        $this->CreateTime = null === $CreateTime ? null : $CreateTime->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CustomerManagement\AddPrepayAccountResponse
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
     * @return \PMG\BingAds\CustomerManagement\AddPrepayAccountResponse
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
     * @return \PMG\BingAds\CustomerManagement\AddPrepayAccountResponse
     */
    public function setCreateTime(\DateTime $CreateTime)
    {
        $this->CreateTime = $CreateTime->format(\DateTime::ATOM);
        return $this;
    }

}
