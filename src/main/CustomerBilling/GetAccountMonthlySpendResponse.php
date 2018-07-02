<?php

namespace PMG\BingAds\CustomerBilling;

class GetAccountMonthlySpendResponse
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount = null)
    {
      $this->Amount = $Amount;
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
     * @return \PMG\BingAds\CustomerBilling\GetAccountMonthlySpendResponse
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
