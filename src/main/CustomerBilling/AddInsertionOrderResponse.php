<?php

namespace PMG\BingAds\CustomerBilling;

class AddInsertionOrderResponse
{

    /**
     * @var int $InsertionOrderId
     */
    protected $InsertionOrderId = null;

    /**
     * @var \DateTime $CreateTime
     */
    protected $CreateTime = null;

    /**
     * @param int $InsertionOrderId
     * @param \DateTime $CreateTime
     */
    public function __construct($InsertionOrderId = null, \DateTime $CreateTime = null)
    {
      $this->InsertionOrderId = $InsertionOrderId;
      $this->CreateTime = $CreateTime ? $CreateTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return int
     */
    public function getInsertionOrderId()
    {
      return $this->InsertionOrderId;
    }

    /**
     * @param int $InsertionOrderId
     * @return \PMG\BingAds\CustomerBilling\AddInsertionOrderResponse
     */
    public function setInsertionOrderId($InsertionOrderId)
    {
      $this->InsertionOrderId = $InsertionOrderId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateTime()
    {
      if ($this->CreateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateTime
     * @return \PMG\BingAds\CustomerBilling\AddInsertionOrderResponse
     */
    public function setCreateTime(\DateTime $CreateTime)
    {
      $this->CreateTime = $CreateTime->format(\DateTime::ATOM);
      return $this;
    }

}
