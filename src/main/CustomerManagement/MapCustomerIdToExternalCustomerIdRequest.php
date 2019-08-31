<?php

namespace PMG\BingAds\CustomerManagement;

class MapCustomerIdToExternalCustomerIdRequest
{

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $ExternalCustomerId
     */
    protected $ExternalCustomerId = null;

    /**
     * @param int $CustomerId
     * @param string $ExternalCustomerId
     */
    public function __construct($CustomerId = null, $ExternalCustomerId = null)
    {
    $this->CustomerId = $CustomerId;
    $this->ExternalCustomerId = $ExternalCustomerId;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \PMG\BingAds\CustomerManagement\MapCustomerIdToExternalCustomerIdRequest
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalCustomerId()
    {
        return $this->ExternalCustomerId;
    }

    /**
     * @param string $ExternalCustomerId
     * @return \PMG\BingAds\CustomerManagement\MapCustomerIdToExternalCustomerIdRequest
     */
    public function setExternalCustomerId($ExternalCustomerId)
    {
        $this->ExternalCustomerId = $ExternalCustomerId;
        return $this;
    }

}
