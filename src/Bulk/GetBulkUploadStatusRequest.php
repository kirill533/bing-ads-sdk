<?php

namespace PMG\BingAds\Bulk;

class GetBulkUploadStatusRequest
{

    /**
     * @var string $RequestId
     */
    protected $RequestId = null;

    /**
     * @param string $RequestId
     */
    public function __construct($RequestId = null)
    {
      $this->RequestId = $RequestId;
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
     * @return \PMG\BingAds\Bulk\GetBulkUploadStatusRequest
     */
    public function setRequestId($RequestId)
    {
      $this->RequestId = $RequestId;
      return $this;
    }

}
