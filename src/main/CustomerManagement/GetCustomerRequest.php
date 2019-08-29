<?php

namespace PMG\BingAds\CustomerManagement;

class GetCustomerRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var boolean $IncludeCustomerAddress
     */
    protected $IncludeCustomerAddress = null;

    /**
     * @param int $CustomerId
     * @param boolean $IncludeCustomerAddress
     */
    public function __construct($CustomerId = null, $IncludeCustomerAddress = null)
    {
      $this->CustomerId = $CustomerId;
      $this->IncludeCustomerAddress = $IncludeCustomerAddress;
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
     * @return \PMG\BingAds\CustomerManagement\GetCustomerRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCustomerAddress()
    {
      return $this->IncludeCustomerAddress;
    }

    /**
     * @param boolean $IncludeCustomerAddress
     * @return \PMG\BingAds\CustomerManagement\GetCustomerRequest
     */
    public function setIncludeCustomerAddress($IncludeCustomerAddress)
    {
      $this->IncludeCustomerAddress = $IncludeCustomerAddress;
      return $this;
    }

}
