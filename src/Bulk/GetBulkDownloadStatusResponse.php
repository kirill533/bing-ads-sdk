<?php

namespace PMG\BingAds\Bulk;

class GetBulkDownloadStatusResponse
{

    /**
     * @var ArrayOfOperationError $Errors
     */
    protected $Errors = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $PercentComplete
     */
    protected $PercentComplete = null;

    /**
     * @var string $RequestStatus
     */
    protected $RequestStatus = null;

    /**
     * @var string $ResultFileUrl
     */
    protected $ResultFileUrl = null;

    /**
     * @param ArrayOfOperationError $Errors
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @param int $PercentComplete
     * @param string $RequestStatus
     * @param string $ResultFileUrl
     */
    public function __construct($Errors = null, $ForwardCompatibilityMap = null, $PercentComplete = null, $RequestStatus = null, $ResultFileUrl = null)
    {
      $this->Errors = $Errors;
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      $this->PercentComplete = $PercentComplete;
      $this->RequestStatus = $RequestStatus;
      $this->ResultFileUrl = $ResultFileUrl;
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
     * @return \PMG\BingAds\Bulk\GetBulkDownloadStatusResponse
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
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
     * @return \PMG\BingAds\Bulk\GetBulkDownloadStatusResponse
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentComplete()
    {
      return $this->PercentComplete;
    }

    /**
     * @param int $PercentComplete
     * @return \PMG\BingAds\Bulk\GetBulkDownloadStatusResponse
     */
    public function setPercentComplete($PercentComplete)
    {
      $this->PercentComplete = $PercentComplete;
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
     * @return \PMG\BingAds\Bulk\GetBulkDownloadStatusResponse
     */
    public function setRequestStatus($RequestStatus)
    {
      $this->RequestStatus = $RequestStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultFileUrl()
    {
      return $this->ResultFileUrl;
    }

    /**
     * @param string $ResultFileUrl
     * @return \PMG\BingAds\Bulk\GetBulkDownloadStatusResponse
     */
    public function setResultFileUrl($ResultFileUrl)
    {
      $this->ResultFileUrl = $ResultFileUrl;
      return $this;
    }

}
