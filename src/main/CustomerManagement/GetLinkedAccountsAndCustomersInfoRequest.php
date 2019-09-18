<?php

namespace PMG\BingAds\CustomerManagement;

class GetLinkedAccountsAndCustomersInfoRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var boolean $OnlyParentAccounts
     */
    protected $OnlyParentAccounts = null;

    /**
     * @param int $CustomerId
     * @param boolean $OnlyParentAccounts
     */
    public function __construct($CustomerId = null, $OnlyParentAccounts = null)
    {
    $this->CustomerId = $CustomerId;
    $this->OnlyParentAccounts = $OnlyParentAccounts;
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
     * @return \PMG\BingAds\CustomerManagement\GetLinkedAccountsAndCustomersInfoRequest
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyParentAccounts()
    {
        return $this->OnlyParentAccounts;
    }

    /**
     * @param boolean $OnlyParentAccounts
     * @return \PMG\BingAds\CustomerManagement\GetLinkedAccountsAndCustomersInfoRequest
     */
    public function setOnlyParentAccounts($OnlyParentAccounts)
    {
        $this->OnlyParentAccounts = $OnlyParentAccounts;
        return $this;
    }

}
