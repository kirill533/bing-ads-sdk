<?php

namespace PMG\BingAds\CustomerManagement;

class UpdateUserRolesRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @var int $NewRoleId
     */
    protected $NewRoleId = null;

    /**
     * @var ArrayOflong $NewAccountIds
     */
    protected $NewAccountIds = null;

    /**
     * @var ArrayOflong $NewCustomerIds
     */
    protected $NewCustomerIds = null;

    /**
     * @var int $DeleteRoleId
     */
    protected $DeleteRoleId = null;

    /**
     * @var ArrayOflong $DeleteAccountIds
     */
    protected $DeleteAccountIds = null;

    /**
     * @var ArrayOflong $DeleteCustomerIds
     */
    protected $DeleteCustomerIds = null;

    /**
     * @param int $CustomerId
     * @param int $UserId
     * @param int $NewRoleId
     * @param ArrayOflong $NewAccountIds
     * @param ArrayOflong $NewCustomerIds
     * @param int $DeleteRoleId
     * @param ArrayOflong $DeleteAccountIds
     * @param ArrayOflong $DeleteCustomerIds
     */
    public function __construct($CustomerId = null, $UserId = null, $NewRoleId = null, $NewAccountIds = null, $NewCustomerIds = null, $DeleteRoleId = null, $DeleteAccountIds = null, $DeleteCustomerIds = null)
    {
      $this->CustomerId = $CustomerId;
      $this->UserId = $UserId;
      $this->NewRoleId = $NewRoleId;
      $this->NewAccountIds = $NewAccountIds;
      $this->NewCustomerIds = $NewCustomerIds;
      $this->DeleteRoleId = $DeleteRoleId;
      $this->DeleteAccountIds = $DeleteAccountIds;
      $this->DeleteCustomerIds = $DeleteCustomerIds;
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
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
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
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewRoleId()
    {
      return $this->NewRoleId;
    }

    /**
     * @param int $NewRoleId
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setNewRoleId($NewRoleId)
    {
      $this->NewRoleId = $NewRoleId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getNewAccountIds()
    {
      return $this->NewAccountIds;
    }

    /**
     * @param ArrayOflong $NewAccountIds
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setNewAccountIds($NewAccountIds)
    {
      $this->NewAccountIds = $NewAccountIds;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getNewCustomerIds()
    {
      return $this->NewCustomerIds;
    }

    /**
     * @param ArrayOflong $NewCustomerIds
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setNewCustomerIds($NewCustomerIds)
    {
      $this->NewCustomerIds = $NewCustomerIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeleteRoleId()
    {
      return $this->DeleteRoleId;
    }

    /**
     * @param int $DeleteRoleId
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setDeleteRoleId($DeleteRoleId)
    {
      $this->DeleteRoleId = $DeleteRoleId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getDeleteAccountIds()
    {
      return $this->DeleteAccountIds;
    }

    /**
     * @param ArrayOflong $DeleteAccountIds
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setDeleteAccountIds($DeleteAccountIds)
    {
      $this->DeleteAccountIds = $DeleteAccountIds;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getDeleteCustomerIds()
    {
      return $this->DeleteCustomerIds;
    }

    /**
     * @param ArrayOflong $DeleteCustomerIds
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesRequest
     */
    public function setDeleteCustomerIds($DeleteCustomerIds)
    {
      $this->DeleteCustomerIds = $DeleteCustomerIds;
      return $this;
    }

}
