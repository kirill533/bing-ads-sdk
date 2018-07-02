<?php

namespace PMG\BingAds\CustomerManagement;

class GetUsersInfoRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var UserLifeCycleStatus $StatusFilter
     */
    protected $StatusFilter = null;

    /**
     * @param int $CustomerId
     * @param UserLifeCycleStatus $StatusFilter
     */
    public function __construct($CustomerId = null, $StatusFilter = null)
    {
      $this->CustomerId = $CustomerId;
      $this->StatusFilter = $StatusFilter;
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
     * @return \PMG\BingAds\CustomerManagement\GetUsersInfoRequest
     */
    public function setCustomerId($CustomerId)
    {
      $this->CustomerId = $CustomerId;
      return $this;
    }

    /**
     * @return UserLifeCycleStatus
     */
    public function getStatusFilter()
    {
      return $this->StatusFilter;
    }

    /**
     * @param UserLifeCycleStatus $StatusFilter
     * @return \PMG\BingAds\CustomerManagement\GetUsersInfoRequest
     */
    public function setStatusFilter($StatusFilter)
    {
      $this->StatusFilter = $StatusFilter;
      return $this;
    }

}
