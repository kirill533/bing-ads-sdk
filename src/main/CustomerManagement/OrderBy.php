<?php

namespace PMG\BingAds\CustomerManagement;

class OrderBy
{

    /**
     * @see \PMG\BingAds\CustomerManagement\OrderByField for valid values
     *
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @see \PMG\BingAds\CustomerManagement\SortOrder for valid values
     *
     * @var string $Order
     */
    protected $Order = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param string $Field
     * @return \PMG\BingAds\CustomerManagement\OrderBy
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param string $Order
     * @return \PMG\BingAds\CustomerManagement\OrderBy
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
