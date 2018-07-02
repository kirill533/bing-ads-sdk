<?php

namespace PMG\BingAds\CustomerManagement;

class GetUserRequest
{

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @param int $UserId
     */
    public function __construct($UserId = null)
    {
      $this->UserId = $UserId;
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

}
