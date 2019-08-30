<?php

namespace PMG\BingAds\CustomerManagement;

class GetCurrentUserResponse
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
     * @return \PMG\BingAds\CustomerManagement\GetCurrentUserResponse
     */
    public function setUser($User)
    {
        $this->User = $User;
        return $this;
    }

}
