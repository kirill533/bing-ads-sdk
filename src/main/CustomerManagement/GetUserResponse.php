<?php

namespace PMG\BingAds\CustomerManagement;

class GetUserResponse
{

    /**
     * @var User $User
     */
    protected $User = null;

    /**
     * @var ArrayOfCustomerRole $CustomerRoles
     */
    protected $CustomerRoles = null;

    /**
     * @param User $User
     * @param ArrayOfCustomerRole $CustomerRoles
     */
    public function __construct($User = null, $CustomerRoles = null)
    {
      $this->User = $User;
      $this->CustomerRoles = $CustomerRoles;
    }

    /**
     * @return User
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param User $User
     * @return \PMG\BingAds\CustomerManagement\GetUserResponse
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

    /**
     * @return ArrayOfCustomerRole
     */
    public function getCustomerRoles()
    {
      return $this->CustomerRoles;
    }

    /**
     * @param ArrayOfCustomerRole $CustomerRoles
     * @return \PMG\BingAds\CustomerManagement\GetUserResponse
     */
    public function setCustomerRoles($CustomerRoles)
    {
      $this->CustomerRoles = $CustomerRoles;
      return $this;
    }

}
