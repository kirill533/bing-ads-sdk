<?php

namespace PMG\BingAds\CustomerManagement;

class AdApiError
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Detail
     */
    protected $Detail = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return \PMG\BingAds\CustomerManagement\AdApiError
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param string $Detail
     * @return \PMG\BingAds\CustomerManagement\AdApiError
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \PMG\BingAds\CustomerManagement\AdApiError
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \PMG\BingAds\CustomerManagement\AdApiError
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

}
