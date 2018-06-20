<?php

namespace PMG\BingAds\CustomerManagement;

class GetAccessibleCustomerResponse
{

    /**
     * @var Customer $AccessibleCustomer
     */
    protected $AccessibleCustomer = null;

    /**
     * @var int $ValidFields
     */
    protected $ValidFields = null;

    /**
     * @param Customer $AccessibleCustomer
     * @param int $ValidFields
     */
    public function __construct($AccessibleCustomer = null, $ValidFields = null)
    {
      $this->AccessibleCustomer = $AccessibleCustomer;
      $this->ValidFields = $ValidFields;
    }

    /**
     * @return Customer
     */
    public function getAccessibleCustomer()
    {
      return $this->AccessibleCustomer;
    }

    /**
     * @param Customer $AccessibleCustomer
     * @return \PMG\BingAds\CustomerManagement\GetAccessibleCustomerResponse
     */
    public function setAccessibleCustomer($AccessibleCustomer)
    {
      $this->AccessibleCustomer = $AccessibleCustomer;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidFields()
    {
      return $this->ValidFields;
    }

    /**
     * @param int $ValidFields
     * @return \PMG\BingAds\CustomerManagement\GetAccessibleCustomerResponse
     */
    public function setValidFields($ValidFields)
    {
      $this->ValidFields = $ValidFields;
      return $this;
    }

}
