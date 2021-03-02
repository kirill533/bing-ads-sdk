<?php

namespace PMG\BingAds\CustomerManagement;

class GetUserMFAStatusResponse
{

    /**
     * @var boolean $MFAStatus
     */
    protected $MFAStatus = null;

    /**
     * @param boolean $MFAStatus
     */
    public function __construct($MFAStatus = null)
    {
    $this->MFAStatus = $MFAStatus;
    }

    /**
     * @return boolean
     */
    public function getMFAStatus()
    {
        return $this->MFAStatus;
    }

    /**
     * @param boolean $MFAStatus
     * @return \PMG\BingAds\CustomerManagement\GetUserMFAStatusResponse
     */
    public function setMFAStatus($MFAStatus)
    {
        $this->MFAStatus = $MFAStatus;
        return $this;
    }

}
