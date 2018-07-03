<?php

namespace PMG\BingAds\CustomerBilling;

class GetBillingDocumentsRequest
{

    /**
     * @var ArrayOfBillingDocumentInfo $BillingDocumentsInfo
     */
    protected $BillingDocumentsInfo = null;

    /**
     * @var DataType $Type
     */
    protected $Type = null;

    /**
     * @param ArrayOfBillingDocumentInfo $BillingDocumentsInfo
     * @param DataType $Type
     */
    public function __construct($BillingDocumentsInfo = null, $Type = null)
    {
      $this->BillingDocumentsInfo = $BillingDocumentsInfo;
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfBillingDocumentInfo
     */
    public function getBillingDocumentsInfo()
    {
      return $this->BillingDocumentsInfo;
    }

    /**
     * @param ArrayOfBillingDocumentInfo $BillingDocumentsInfo
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsRequest
     */
    public function setBillingDocumentsInfo($BillingDocumentsInfo)
    {
      $this->BillingDocumentsInfo = $BillingDocumentsInfo;
      return $this;
    }

    /**
     * @return DataType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DataType $Type
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
