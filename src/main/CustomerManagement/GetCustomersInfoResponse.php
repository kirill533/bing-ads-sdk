<?php

namespace PMG\BingAds\CustomerManagement;

class GetCustomersInfoResponse
{

    /**
     * @var ArrayOfCustomerInfo $CustomersInfo
     */
    protected $CustomersInfo = null;

    /**
     * @param ArrayOfCustomerInfo $CustomersInfo
     */
    public function __construct($CustomersInfo = null)
    {
    $this->CustomersInfo = $CustomersInfo;
    }

    /**
     * @return ArrayOfCustomerInfo
     */
    public function getCustomersInfo()
    {
        return $this->CustomersInfo;
    }

    /**
     * @param ArrayOfCustomerInfo $CustomersInfo
     * @return \PMG\BingAds\CustomerManagement\GetCustomersInfoResponse
     */
    public function setCustomersInfo($CustomersInfo)
    {
        $this->CustomersInfo = $CustomersInfo;
        return $this;
    }

}
