<?php

namespace PMG\BingAds\CustomerManagement;

class DeleteCustomerRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var base64Binary $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @param int $CustomerId
     * @param base64Binary $TimeStamp
     */
    public function __construct($CustomerId = null, $TimeStamp = null)
    {
      $this->CustomerId = $CustomerId;
      $this->TimeStamp = $TimeStamp;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \PMG\BingAds\CustomerManagement\DeleteCustomerRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
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
     * @return \PMG\BingAds\CustomerManagement\DeleteCustomerRequest
     */
    public function setTimeStamp($TimeStamp)
    {
      $this->TimeStamp = $TimeStamp;
      return $this;
    }

}
