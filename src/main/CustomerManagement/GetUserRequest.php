<?php

namespace PMG\BingAds\CustomerManagement;

class GetUserRequest
{

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @var boolean $IncludeLinkedAccountIds
     */
    protected $IncludeLinkedAccountIds = null;

    /**
     * @param int $UserId
     * @param boolean $IncludeLinkedAccountIds
     */
    public function __construct($UserId = null, $IncludeLinkedAccountIds = null)
    {
    $this->UserId = $UserId;
    $this->IncludeLinkedAccountIds = $IncludeLinkedAccountIds;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param int $UserId
     * @return \PMG\BingAds\CustomerManagement\GetUserRequest
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeLinkedAccountIds()
    {
        return $this->IncludeLinkedAccountIds;
    }

    /**
     * @param boolean $IncludeLinkedAccountIds
     * @return \PMG\BingAds\CustomerManagement\GetUserRequest
     */
    public function setIncludeLinkedAccountIds($IncludeLinkedAccountIds)
    {
        $this->IncludeLinkedAccountIds = $IncludeLinkedAccountIds;
        return $this;
    }

}
