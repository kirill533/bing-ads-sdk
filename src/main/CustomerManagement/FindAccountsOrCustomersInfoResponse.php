<?php

namespace PMG\BingAds\CustomerManagement;

class FindAccountsOrCustomersInfoResponse
{

    /**
     * @var ArrayOfAccountInfoWithCustomerData $AccountInfoWithCustomerData
     */
    protected $AccountInfoWithCustomerData = null;

    /**
     * @param ArrayOfAccountInfoWithCustomerData $AccountInfoWithCustomerData
     */
    public function __construct($AccountInfoWithCustomerData = null)
    {
    $this->AccountInfoWithCustomerData = $AccountInfoWithCustomerData;
    }

    /**
     * @return ArrayOfAccountInfoWithCustomerData
     */
    public function getAccountInfoWithCustomerData()
    {
        return $this->AccountInfoWithCustomerData;
    }

    /**
     * @param ArrayOfAccountInfoWithCustomerData $AccountInfoWithCustomerData
     * @return \PMG\BingAds\CustomerManagement\FindAccountsOrCustomersInfoResponse
     */
    public function setAccountInfoWithCustomerData($AccountInfoWithCustomerData)
    {
        $this->AccountInfoWithCustomerData = $AccountInfoWithCustomerData;
        return $this;
    }

}
