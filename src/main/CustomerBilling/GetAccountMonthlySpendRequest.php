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
      $this->MonthYear = $MonthYear ? $MonthYear->format(\DateTime::ATOM) : null;
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
      if ($this->MonthYear == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MonthYear);
        } catch (\Exception $e) {
          return false;
        }
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
