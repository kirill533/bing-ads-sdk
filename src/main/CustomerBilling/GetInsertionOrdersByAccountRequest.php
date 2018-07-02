<?php

namespace PMG\BingAds\CustomerBilling;

class GetInsertionOrdersByAccountRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $InsertionOrderIds
     */
    protected $InsertionOrderIds = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $InsertionOrderIds
     */
    public function __construct($AccountId = null, $InsertionOrderIds = null)
    {
      $this->AccountId = $AccountId;
      $this->InsertionOrderIds = $InsertionOrderIds;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CustomerBilling\GetInsertionOrdersByAccountRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getInsertionOrderIds()
    {
      return $this->InsertionOrderIds;
    }

    /**
     * @param ArrayOflong $InsertionOrderIds
     * @return \PMG\BingAds\CustomerBilling\GetInsertionOrdersByAccountRequest
     */
    public function setInsertionOrderIds($InsertionOrderIds)
    {
      $this->InsertionOrderIds = $InsertionOrderIds;
      return $this;
    }

}
