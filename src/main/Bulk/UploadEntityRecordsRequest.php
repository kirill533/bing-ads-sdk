<?php

namespace PMG\BingAds\Bulk;

class UploadEntityRecordsRequest
{

    /**
     * @var ArrayOfstring $EntityRecords
     */
    protected $EntityRecords = null;

    /**
     * @var ResponseMode $ResponseMode
     */
    protected $ResponseMode = null;

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @param ArrayOfstring $EntityRecords
     * @param ResponseMode $ResponseMode
     * @param int $AccountId
     */
    public function __construct($EntityRecords = null, $ResponseMode = null, $AccountId = null)
    {
    $this->EntityRecords = $EntityRecords;
    $this->ResponseMode = $ResponseMode;
    $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsRequest
     */
    public function setEntityRecords($EntityRecords)
    {
        $this->EntityRecords = $EntityRecords;
        return $this;
    }

    /**
     * @return ResponseMode
     */
    public function getResponseMode()
    {
        return $this->ResponseMode;
    }

    /**
     * @param ResponseMode $ResponseMode
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsRequest
     */
    public function setResponseMode($ResponseMode)
    {
        $this->ResponseMode = $ResponseMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\Bulk\UploadEntityRecordsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

}
