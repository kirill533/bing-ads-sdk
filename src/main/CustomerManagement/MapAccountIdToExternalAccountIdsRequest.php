<?php

namespace PMG\BingAds\CustomerManagement;

class MapAccountIdToExternalAccountIdsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfstring $ExternalAccountIds
     */
    protected $ExternalAccountIds = null;

    /**
     * @param int $AccountId
     * @param ArrayOfstring $ExternalAccountIds
     */
    public function __construct($AccountId = null, $ExternalAccountIds = null)
    {
    $this->AccountId = $AccountId;
    $this->ExternalAccountIds = $ExternalAccountIds;
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
     * @return \PMG\BingAds\CustomerManagement\MapAccountIdToExternalAccountIdsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getExternalAccountIds()
    {
        return $this->ExternalAccountIds;
    }

    /**
     * @param ArrayOfstring $ExternalAccountIds
     * @return \PMG\BingAds\CustomerManagement\MapAccountIdToExternalAccountIdsRequest
     */
    public function setExternalAccountIds($ExternalAccountIds)
    {
        $this->ExternalAccountIds = $ExternalAccountIds;
        return $this;
    }

}
