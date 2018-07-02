<?php

namespace PMG\BingAds\CustomerManagement;

class SignupCustomerRequest
{

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var AdvertiserAccount $Account
     */
    protected $Account = null;

    /**
     * @var int $ParentCustomerId
     */
    protected $ParentCustomerId = null;

    /**
     * @param Customer $Customer
     * @param AdvertiserAccount $Account
     * @param int $ParentCustomerId
     */
    public function __construct($Customer = null, $Account = null, $ParentCustomerId = null)
    {
      $this->Customer = $Customer;
      $this->Account = $Account;
      $this->ParentCustomerId = $ParentCustomerId;
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
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerRequest
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return AdvertiserAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param AdvertiserAccount $Account
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerRequest
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentCustomerId()
    {
      return $this->ParentCustomerId;
    }

    /**
     * @param int $ParentCustomerId
     * @return \PMG\BingAds\CustomerManagement\SignupCustomerRequest
     */
    public function setParentCustomerId($ParentCustomerId)
    {
      $this->ParentCustomerId = $ParentCustomerId;
      return $this;
    }

}
