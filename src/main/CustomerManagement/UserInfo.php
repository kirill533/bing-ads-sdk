<?php

namespace PMG\BingAds\CustomerManagement;

class UserInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    
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
     * @return \PMG\BingAds\CustomerManagement\UserInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \PMG\BingAds\CustomerManagement\UserInfo
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
