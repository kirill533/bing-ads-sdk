<?php

namespace PMG\BingAds\CustomerManagement;

class ValidateAddressRequest
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @param Address $Address
     */
    public function __construct($Address = null)
    {
    $this->Address = $Address;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \PMG\BingAds\CustomerManagement\ValidateAddressRequest
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

}
