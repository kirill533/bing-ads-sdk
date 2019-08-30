<?php

namespace PMG\BingAds\AdInsight;

class BatchError
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Details
     */
    protected $Details = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var int $Index
     */
    protected $Index = null;

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
     * @return \PMG\BingAds\AdInsight\BatchError
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param string $Details
     * @return \PMG\BingAds\AdInsight\BatchError
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;
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
     * @return \PMG\BingAds\AdInsight\BatchError
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->Index;
    }

    /**
     * @param int $Index
     * @return \PMG\BingAds\AdInsight\BatchError
     */
    public function setIndex($Index)
    {
        $this->Index = $Index;
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
     * @return \PMG\BingAds\AdInsight\BatchError
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

}
