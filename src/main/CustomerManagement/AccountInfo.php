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
     * @var AccountLifeCycleStatus $AccountLifeCycleStatus
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
     * @return AccountLifeCycleStatus
     */
    public function getAccountLifeCycleStatus()
    {
        return $this->AccountLifeCycleStatus;
    }

    /**
     * @param AccountLifeCycleStatus $AccountLifeCycleStatus
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
