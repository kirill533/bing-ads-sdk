<?php

namespace PMG\BingAds\CustomerBilling;

class GetInsertionOrdersByAccountResponse
{

    /**
     * @var ArrayOfInsertionOrder $InsertionOrders
     */
    protected $InsertionOrders = null;

    /**
     * @param ArrayOfInsertionOrder $InsertionOrders
     */
    public function __construct($InsertionOrders = null)
    {
    $this->InsertionOrders = $InsertionOrders;
    }

    /**
     * @return ArrayOfInsertionOrder
     */
    public function getInsertionOrders()
    {
        return $this->InsertionOrders;
    }

    /**
     * @param ArrayOfInsertionOrder $InsertionOrders
     * @return \PMG\BingAds\CustomerBilling\GetInsertionOrdersByAccountResponse
     */
    public function setInsertionOrders($InsertionOrders)
    {
        $this->InsertionOrders = $InsertionOrders;
        return $this;
    }

}
