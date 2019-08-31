<?php

namespace PMG\BingAds\CustomerManagement;

class GetAccountsInfoResponse
{

    /**
     * @var ArrayOfAccountInfo $AccountsInfo
     */
    protected $AccountsInfo = null;

    /**
     * @param ArrayOfAccountInfo $AccountsInfo
     */
    public function __construct($AccountsInfo = null)
    {
    $this->AccountsInfo = $AccountsInfo;
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
     * @return \PMG\BingAds\CustomerManagement\GetAccountsInfoResponse
     */
    public function setAccountsInfo($AccountsInfo)
    {
        $this->AccountsInfo = $AccountsInfo;
        return $this;
    }

}
