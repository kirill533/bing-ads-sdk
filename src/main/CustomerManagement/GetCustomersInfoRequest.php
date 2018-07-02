<?php

namespace PMG\BingAds\CustomerManagement;

class GetCustomersInfoRequest
{

    /**
     * @var string $CustomerNameFilter
     */
    protected $CustomerNameFilter = null;

    /**
     * @var int $TopN
     */
    protected $TopN = null;

    /**
     * @param string $CustomerNameFilter
     * @param int $TopN
     */
    public function __construct($CustomerNameFilter = null, $TopN = null)
    {
      $this->CustomerNameFilter = $CustomerNameFilter;
      $this->TopN = $TopN;
    }

    /**
     * @return string
     */
    public function getCustomerNameFilter()
    {
      return $this->CustomerNameFilter;
    }

    /**
     * @param string $CustomerNameFilter
     * @return \PMG\BingAds\CustomerManagement\GetCustomersInfoRequest
     */
    public function setCustomerNameFilter($CustomerNameFilter)
    {
      $this->CustomerNameFilter = $CustomerNameFilter;
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
     * @return \PMG\BingAds\CustomerManagement\GetCustomersInfoRequest
     */
    public function setTopN($TopN)
    {
      $this->TopN = $TopN;
      return $this;
    }

}
