<?php

namespace PMG\BingAds\CustomerManagement;

class UpdateUserRequest
{

    /**
     * @var User $User
     */
    protected $User = null;

    /**
     * @param User $User
     */
    public function __construct($User = null)
    {
      $this->User = $User;
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
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRequest
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
