<?php

namespace PMG\BingAds\CustomerManagement;

class GetUsersInfoResponse
{

    /**
     * @var ArrayOfUserInfo $UsersInfo
     */
    protected $UsersInfo = null;

    /**
     * @param ArrayOfUserInfo $UsersInfo
     */
    public function __construct($UsersInfo = null)
    {
      $this->UsersInfo = $UsersInfo;
    }

    /**
     * @return ArrayOfUserInfo
     */
    public function getUsersInfo()
    {
      return $this->UsersInfo;
    }

    /**
     * @param ArrayOfUserInfo $UsersInfo
     * @return \PMG\BingAds\CustomerManagement\GetUsersInfoResponse
     */
    public function setUsersInfo($UsersInfo)
    {
      $this->UsersInfo = $UsersInfo;
      return $this;
    }

}
