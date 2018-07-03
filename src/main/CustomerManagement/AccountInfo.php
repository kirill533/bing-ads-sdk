<?php

namespace PMG\BingAds\CustomerManagement;

class AccountInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\AccountLifeCycleStatus for valid values
     *
     * @var string $AccountLifeCycleStatus
     */
    protected $AccountLifeCycleStatus = null;

    /**
     * @var int $PauseReason
     */
    protected $PauseReason = null;

    
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
     * @return \PMG\BingAds\CustomerManagement\AccountInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CustomerManagement\AccountInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \PMG\BingAds\CustomerManagement\AccountInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountLifeCycleStatus()
    {
      return $this->AccountLifeCycleStatus;
    }

    /**
     * @param string $AccountLifeCycleStatus
     * @return \PMG\BingAds\CustomerManagement\AccountInfo
     */
    public function setAccountLifeCycleStatus($AccountLifeCycleStatus)
    {
      $this->AccountLifeCycleStatus = $AccountLifeCycleStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getPauseReason()
    {
      return $this->PauseReason;
    }

    /**
     * @param int $PauseReason
     * @return \PMG\BingAds\CustomerManagement\AccountInfo
     */
    public function setPauseReason($PauseReason)
    {
      $this->PauseReason = $PauseReason;
      return $this;
    }

}
