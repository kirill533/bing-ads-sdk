<?php

namespace PMG\BingAds\CustomerManagement;

class OrderBy
{

    /**
     * @var OrderByField $Field
     */
    protected $Field = null;

    /**
     * @var SortOrder $Order
     */
    protected $Order = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderByField
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param OrderByField $Field
     * @return \PMG\BingAds\CustomerManagement\OrderBy
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return SortOrder
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param SortOrder $Order
     * @return \PMG\BingAds\CustomerManagement\OrderBy
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}
