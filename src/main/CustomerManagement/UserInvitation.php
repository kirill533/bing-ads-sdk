<?php

namespace PMG\BingAds\CustomerManagement;

class UserInvitation
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var int $RoleId
     */
    protected $RoleId = null;

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var LCID $Lcid
     */
    protected $Lcid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
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
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setRoleId($RoleId)
    {
        $this->RoleId = $RoleId;
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
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setAccountIds($AccountIds)
    {
        $this->AccountIds = $AccountIds;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        if (null === $this->ExpirationDate) {
            return $this->ExpirationDate;
        }
        try {
            return new \DateTime($this->ExpirationDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
        $this->ExpirationDate = null === $ExpirationDate ? null : $ExpirationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return LCID
     */
    public function getLcid()
    {
        return $this->Lcid;
    }

    /**
     * @param LCID $Lcid
     * @return \PMG\BingAds\CustomerManagement\UserInvitation
     */
    public function setLcid($Lcid)
    {
        $this->Lcid = $Lcid;
        return $this;
    }

}
