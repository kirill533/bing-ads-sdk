<?php

namespace PMG\BingAds\Bulk;

class GetBulkUploadUrlRequest
{

    /**
     * @see \PMG\BingAds\Bulk\ResponseMode for valid values
     *
     * @var string $ResponseMode
     */
    protected $ResponseMode = null;

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @param string $ResponseMode
     * @param int $AccountId
     */
    public function __construct($ResponseMode = null, $AccountId = null)
    {
      $this->ResponseMode = $ResponseMode;
      $this->AccountId = $AccountId;
    }

    /**
     * @return string
     */
    public function getResponseMode()
    {
      return $this->ResponseMode;
    }

    /**
     * @param string $ResponseMode
     * @return \PMG\BingAds\Bulk\GetBulkUploadUrlRequest
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
     * @return \PMG\BingAds\Bulk\GetBulkUploadUrlRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

}
