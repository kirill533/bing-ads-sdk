<?php

namespace PMG\BingAds\CustomerManagement;

class DeleteAccountRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @param int $AccountId
     * @param string $TimeStamp
     */
    public function __construct($AccountId = null, $TimeStamp = null)
    {
      $this->AccountId = $AccountId;
      $this->TimeStamp = $TimeStamp;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CustomerManagement\DeleteAccountRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\CustomerManagement\DeleteAccountRequest
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

}
