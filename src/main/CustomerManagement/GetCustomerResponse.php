<?php

namespace PMG\BingAds\CustomerManagement;

class GetCustomerResponse
{

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @param Customer $Customer
     */
    public function __construct($Customer = null)
    {
      $this->Customer = $Customer;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return \PMG\BingAds\CustomerManagement\GetCustomerResponse
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

}
