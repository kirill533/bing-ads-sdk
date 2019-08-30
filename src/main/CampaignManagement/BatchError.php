<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @var string $FieldPath
     */
    protected $FieldPath = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
     */
    public function setErrorCode($ErrorCode)
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldPath()
    {
        return $this->FieldPath;
    }

    /**
     * @param string $FieldPath
     * @return \PMG\BingAds\CampaignManagement\BatchError
     */
    public function setFieldPath($FieldPath)
    {
        $this->FieldPath = $FieldPath;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
        return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\BatchError
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
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
     * @return \PMG\BingAds\CampaignManagement\BatchError
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
