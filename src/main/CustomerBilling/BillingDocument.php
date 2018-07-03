<?php

namespace PMG\BingAds\CustomerBilling;

class BillingDocument
{

    /**
     * @var string $Data
     */
    protected $Data = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\CustomerBilling\DataType for valid values
     *
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
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
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CustomerBilling\BillingDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
