<?php

namespace PMG\BingAds\CustomerManagement;

class GetLinkedAccountsAndCustomersInfoResponse
{

    /**
     * @var ArrayOfAccountInfo $AccountsInfo
     */
    protected $AccountsInfo = null;

    /**
     * @var ArrayOfCustomerInfo $CustomersInfo
     */
    protected $CustomersInfo = null;

    /**
     * @param ArrayOfAccountInfo $AccountsInfo
     * @param ArrayOfCustomerInfo $CustomersInfo
     */
    public function __construct($AccountsInfo = null, $CustomersInfo = null)
    {
    $this->AccountsInfo = $AccountsInfo;
    $this->CustomersInfo = $CustomersInfo;
    }

    /**
     * @return ArrayOfAccountInfo
     */
    public function getAccountsInfo()
    {
        return $this->AccountsInfo;
    }

    /**
     * @param ArrayOfAccountInfo $AccountsInfo
     * @return \PMG\BingAds\CustomerManagement\GetLinkedAccountsAndCustomersInfoResponse
     */
    public function setAccountsInfo($AccountsInfo)
    {
        $this->AccountsInfo = $AccountsInfo;
        return $this;
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
     * @return \PMG\BingAds\CustomerManagement\GetLinkedAccountsAndCustomersInfoResponse
     */
    public function setCustomersInfo($CustomersInfo)
    {
        $this->CustomersInfo = $CustomersInfo;
        return $this;
    }

}
