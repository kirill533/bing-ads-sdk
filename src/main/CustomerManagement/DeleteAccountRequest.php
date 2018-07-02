<?php

namespace PMG\BingAds\CustomerManagement;

class DeleteAccountRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var base64Binary $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @param int $AccountId
     * @param base64Binary $TimeStamp
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
     * @return base64Binary
     */
    public function getTimeStamp()
    {
      return $this->TimeStamp;
    }

    /**
     * @param base64Binary $TimeStamp
     * @return \PMG\BingAds\CustomerManagement\DeleteAccountRequest
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

}
