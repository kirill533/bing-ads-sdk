<?php

namespace PMG\BingAds\CustomerManagement;

class ValidateAddressResponse
{

    /**
     * @var Address $OriginalAddress
     */
    protected $OriginalAddress = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfAddress $SuggestedAddresses
     */
    protected $SuggestedAddresses = null;

    /**
     * @param Address $OriginalAddress
     * @param string $Status
     * @param ArrayOfAddress $SuggestedAddresses
     */
    public function __construct($OriginalAddress = null, $Status = null, $SuggestedAddresses = null)
    {
    $this->OriginalAddress = $OriginalAddress;
    $this->Status = $Status;
    $this->SuggestedAddresses = $SuggestedAddresses;
    }

    /**
     * @return Address
     */
    public function getOriginalAddress()
    {
        return $this->OriginalAddress;
    }

    /**
     * @param Address $OriginalAddress
     * @return \PMG\BingAds\CustomerManagement\ValidateAddressResponse
     */
    public function setOriginalAddress($OriginalAddress)
    {
        $this->OriginalAddress = $OriginalAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CustomerManagement\ValidateAddressResponse
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getSuggestedAddresses()
    {
        return $this->SuggestedAddresses;
    }

    /**
     * @param ArrayOfAddress $SuggestedAddresses
     * @return \PMG\BingAds\CustomerManagement\ValidateAddressResponse
     */
    public function setSuggestedAddresses($SuggestedAddresses)
    {
        $this->SuggestedAddresses = $SuggestedAddresses;
        return $this;
    }

}
