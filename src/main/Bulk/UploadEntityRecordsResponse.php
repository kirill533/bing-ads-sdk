<?php

namespace PMG\BingAds\Bulk;

class UploadEntityRecordsResponse
{

    /**
     * @var ArrayOfstring $EntityRecords
     */
    protected $EntityRecords = null;

    /**
     * @var ArrayOfOperationError $Errors
     */
    protected $Errors = null;

    /**
     * @var string $RequestId
     */
    protected $RequestId = null;

    /**
     * @var string $RequestStatus
     */
    protected $RequestStatus = null;

    /**
     * @param ArrayOfstring $EntityRecords
     * @param ArrayOfOperationError $Errors
     * @param string $RequestId
     * @param string $RequestStatus
     */
    public function __construct($EntityRecords = null, $Errors = null, $RequestId = null, $RequestStatus = null)
    {
    $this->EntityRecords = $EntityRecords;
    $this->Errors = $Errors;
    $this->RequestId = $RequestId;
    $this->RequestStatus = $RequestStatus;
    }

    /**
     * @return ArrayOfstring
     */
    public function getEntityRecords()
    {
        return $this->EntityRecords;
    }

    /**
     * @param ArrayOfstring $EntityRecords
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsResponse
     */
    public function setEntityRecords($EntityRecords)
    {
        $this->EntityRecords = $EntityRecords;
        return $this;
    }

    /**
     * @return ArrayOfOperationError
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param ArrayOfOperationError $Errors
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsResponse
     */
    public function setErrors($Errors)
    {
        $this->Errors = $Errors;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * @param string $RequestId
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsResponse
     */
    public function setRequestId($RequestId)
    {
        $this->RequestId = $RequestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestStatus()
    {
        return $this->RequestStatus;
    }

    /**
     * @param string $RequestStatus
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsResponse
     */
    public function setRequestStatus($RequestStatus)
    {
        $this->RequestStatus = $RequestStatus;
        return $this;
    }

}
