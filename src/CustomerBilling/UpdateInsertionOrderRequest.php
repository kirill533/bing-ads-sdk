<?php

namespace PMG\BingAds\CustomerBilling;

class UpdateInsertionOrderRequest
{

    /**
     * @var InsertionOrder $InsertionOrder
     */
    protected $InsertionOrder = null;

    /**
     * @param InsertionOrder $InsertionOrder
     */
    public function __construct($InsertionOrder = null)
    {
      $this->InsertionOrder = $InsertionOrder;
    }

    /**
     * @return InsertionOrder
     */
    public function getInsertionOrder()
    {
      return $this->InsertionOrder;
    }

    /**
     * @param InsertionOrder $InsertionOrder
     * @return \PMG\BingAds\CustomerBilling\UpdateInsertionOrderRequest
     */
    public function setInsertionOrder($InsertionOrder)
    {
      $this->InsertionOrder = $InsertionOrder;
      return $this;
    }

}
