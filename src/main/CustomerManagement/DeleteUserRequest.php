<?php

namespace PMG\BingAds\CustomerManagement;

class DeleteUserRequest
{

    /**
     * @var int $UserId
     */
    protected $UserId = null;

    /**
     * @var string $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @param int $UserId
     * @param string $TimeStamp
     */
    public function __construct($UserId = null, $TimeStamp = null)
    {
    $this->UserId = $UserId;
    $this->TimeStamp = $TimeStamp;
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
     * @return \PMG\BingAds\CustomerManagement\DeleteUserRequest
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }

    /**
     * @param string $TimeStamp
     * @return \PMG\BingAds\CustomerManagement\DeleteUserRequest
     */
    public function setTimeStamp($TimeStamp)
    {
        $this->TimeStamp = $TimeStamp;
        return $this;
    }

}
