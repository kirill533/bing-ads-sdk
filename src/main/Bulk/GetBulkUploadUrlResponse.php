<?php

namespace PMG\BingAds\Bulk;

class GetBulkUploadUrlResponse
{

    /**
     * @var string $RequestId
     */
    protected $RequestId = null;

    /**
     * @var string $UploadUrl
     */
    protected $UploadUrl = null;

    /**
     * @param string $RequestId
     * @param string $UploadUrl
     */
    public function __construct($RequestId = null, $UploadUrl = null)
    {
      $this->RequestId = $RequestId;
      $this->UploadUrl = $UploadUrl;
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
     * @return \PMG\BingAds\Bulk\GetBulkUploadUrlResponse
     */
    public function setRequestId($RequestId)
    {
      $this->RequestId = $RequestId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadUrl()
    {
      return $this->UploadUrl;
    }

    /**
     * @param string $UploadUrl
     * @return \PMG\BingAds\Bulk\GetBulkUploadUrlResponse
     */
    public function setUploadUrl($UploadUrl)
    {
      $this->UploadUrl = $UploadUrl;
      return $this;
    }

}
