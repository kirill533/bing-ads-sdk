<?php

namespace PMG\BingAds\CustomerManagement;

class SearchCustomersResponse
{

    /**
     * @var ArrayOfCustomer $Customers
     */
    protected $Customers = null;

    /**
     * @param ArrayOfCustomer $Customers
     */
    public function __construct($Customers = null)
    {
      $this->Customers = $Customers;
    }

    /**
     * @return ArrayOfCustomer
     */
    public function getCustomers()
    {
      return $this->Customers;
    }

    /**
     * @param ArrayOfCustomer $Customers
     * @return \PMG\BingAds\CustomerManagement\SearchCustomersResponse
     */
    public function setCustomers($Customers)
    {
      $this->Customers = $Customers;
      return $this;
    }

}
