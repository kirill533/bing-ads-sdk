<?php

namespace PMG\BingAds\CustomerManagement;

class FindAccountsRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $AccountFilter
     */
    protected $AccountFilter = null;

    /**
     * @var int $TopN
     */
    protected $TopN = null;

    /**
     * @param int $CustomerId
     * @param string $AccountFilter
     * @param int $TopN
     */
    public function __construct($CustomerId = null, $AccountFilter = null, $TopN = null)
    {
      $this->CustomerId = $CustomerId;
      $this->AccountFilter = $AccountFilter;
      $this->TopN = $TopN;
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
     * @return \PMG\BingAds\CustomerManagement\FindAccountsRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountFilter()
    {
      return $this->AccountFilter;
    }

    /**
     * @param string $AccountFilter
     * @return \PMG\BingAds\CustomerManagement\FindAccountsRequest
     */
    public function setAccountFilter($AccountFilter)
    {
      $this->AccountFilter = $AccountFilter;
      return $this;
    }

    /**
     * @return int
     */
    public function getTopN()
    {
      return $this->TopN;
    }

    /**
     * @param int $TopN
     * @return \PMG\BingAds\CustomerManagement\FindAccountsRequest
     */
    public function setTopN($TopN)
    {
      $this->TopN = $TopN;
      return $this;
    }

}
