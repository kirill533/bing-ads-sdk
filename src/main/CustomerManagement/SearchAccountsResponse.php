<?php

namespace PMG\BingAds\CustomerManagement;

class SearchAccountsResponse
{

    /**
     * @var ArrayOfAdvertiserAccount $Accounts
     */
    protected $Accounts = null;

    /**
     * @param ArrayOfAdvertiserAccount $Accounts
     */
    public function __construct($Accounts = null)
    {
    $this->Accounts = $Accounts;
    }

    /**
     * @return ArrayOfAdvertiserAccount
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }

    /**
     * @param ArrayOfAdvertiserAccount $Accounts
     * @return \PMG\BingAds\CustomerManagement\SearchAccountsResponse
     */
    public function setAccounts($Accounts)
    {
        $this->Accounts = $Accounts;
        return $this;
    }

}
