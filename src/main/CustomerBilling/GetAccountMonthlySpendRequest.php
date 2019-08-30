<?php

namespace PMG\BingAds\CustomerBilling;

class GetAccountMonthlySpendRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var \DateTime $MonthYear
     */
    protected $MonthYear = null;

    /**
     * @param int $AccountId
     * @param \DateTime $MonthYear
     */
    public function __construct($AccountId = null, \DateTime $MonthYear = null)
    {
    $this->AccountId = $AccountId;
        $this->MonthYear = null === $MonthYear ? null : $MonthYear->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CustomerBilling\GetAccountMonthlySpendRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMonthYear()
    {
        if (null === $this->MonthYear) {
            return $this->MonthYear;
        }
        try {
            return new \DateTime($this->MonthYear);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $MonthYear
     * @return \PMG\BingAds\CustomerBilling\GetAccountMonthlySpendRequest
     */
    public function setMonthYear(\DateTime $MonthYear)
    {
        $this->MonthYear = $MonthYear->format(\DateTime::ATOM);
        return $this;
    }

}
