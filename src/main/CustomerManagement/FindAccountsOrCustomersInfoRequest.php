<?php

namespace PMG\BingAds\CustomerManagement;

class FindAccountsOrCustomersInfoRequest
{

    /**
     * @var string $Filter
     */
    protected $Filter = null;

    /**
     * @var int $TopN
     */
    protected $TopN = null;

    /**
     * @param string $Filter
     * @param int $TopN
     */
    public function __construct($Filter = null, $TopN = null)
    {
      $this->Filter = $Filter;
      $this->TopN = $TopN;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param string $Filter
     * @return \PMG\BingAds\CustomerManagement\FindAccountsOrCustomersInfoRequest
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
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
     * @return \PMG\BingAds\CustomerManagement\FindAccountsOrCustomersInfoRequest
     */
    public function setTopN($TopN)
    {
      $this->TopN = $TopN;
      return $this;
    }

}
