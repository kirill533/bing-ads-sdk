<?php

namespace PMG\BingAds\CustomerManagement;

class CustomerRole
{

    /**
     * @var int $RoleId
     */
    protected $RoleId = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var ArrayOflong $LinkedAccountIds
     */
    protected $LinkedAccountIds = null;

    /**
     * @var string $CustomerLinkPermission
     */
    protected $CustomerLinkPermission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
        return $this->RoleId;
    }

    /**
     * @param int $RoleId
     * @return \PMG\BingAds\CustomerManagement\CustomerRole
     */
    public function setRoleId($RoleId)
    {
        $this->RoleId = $RoleId;
        return $this;
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
     * @return \PMG\BingAds\CustomerManagement\CustomerRole
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAccountIds()
    {
        return $this->AccountIds;
    }

    /**
     * @param ArrayOflong $AccountIds
     * @return \PMG\BingAds\CustomerManagement\CustomerRole
     */
    public function setAccountIds($AccountIds)
    {
        $this->AccountIds = $AccountIds;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getLinkedAccountIds()
    {
        return $this->LinkedAccountIds;
    }

    /**
     * @param ArrayOflong $LinkedAccountIds
     * @return \PMG\BingAds\CustomerManagement\CustomerRole
     */
    public function setLinkedAccountIds($LinkedAccountIds)
    {
        $this->LinkedAccountIds = $LinkedAccountIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLinkPermission()
    {
        return $this->CustomerLinkPermission;
    }

    /**
     * @param string $CustomerLinkPermission
     * @return \PMG\BingAds\CustomerManagement\CustomerRole
     */
    public function setCustomerLinkPermission($CustomerLinkPermission)
    {
        $this->CustomerLinkPermission = $CustomerLinkPermission;
        return $this;
    }

}
