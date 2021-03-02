<?php

namespace PMG\BingAds\CustomerManagement;

class GetAccountRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var AccountAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AccountId
     * @param AccountAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AccountId = null, $ReturnAdditionalFields = null)
    {
    $this->AccountId = $AccountId;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
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

    /**
     * @return AccountAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param AccountAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CustomerManagement\GetAccountRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
