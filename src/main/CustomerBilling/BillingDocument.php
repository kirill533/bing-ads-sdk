<?php

namespace PMG\BingAds\CustomerBilling;

class BillingDocument
{

    /**
     * @var base64Binary $Data
     */
    protected $Data = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var DataType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param base64Binary $Data
     * @return \PMG\BingAds\CustomerBilling\BillingDocument
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CustomerBilling\BillingDocument
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return DataType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DataType $Type
     * @return \PMG\BingAds\CustomerBilling\BillingDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
