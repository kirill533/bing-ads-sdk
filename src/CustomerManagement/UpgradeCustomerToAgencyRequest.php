<?php

namespace PMG\BingAds\CustomerManagement;

class UpgradeCustomerToAgencyRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @param int $CustomerId
     */
    public function __construct($CustomerId = null)
    {
      $this->CustomerId = $CustomerId;
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
     * @return \PMG\BingAds\CustomerManagement\UpgradeCustomerToAgencyRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

}
