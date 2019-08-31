<?php

namespace PMG\BingAds\CustomerManagement;

class GetAccountRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @param int $AccountId
     */
    public function __construct($AccountId = null)
    {
    $this->AccountId = $AccountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CustomerManagement\GetAccountRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

}
