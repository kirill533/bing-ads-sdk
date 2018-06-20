<?php

namespace PMG\BingAds\CustomerBilling;

class BatchError
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Details
     */
    protected $Details = null;

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \PMG\BingAds\CustomerBilling\BatchError
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param string $Details
     * @return \PMG\BingAds\CustomerBilling\BatchError
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
      return $this->Index;
    }

    /**
     * @param int $Index
     * @return \PMG\BingAds\CustomerBilling\BatchError
     */
    public function setIndex($Index)
    {
      $this->Index = $Index;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \PMG\BingAds\CustomerBilling\BatchError
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
