<?php

namespace PMG\BingAds\CustomerBilling;

class GetBillingDocumentsInfoResponse
{

    /**
     * @var ArrayOfBillingDocumentInfo $BillingDocumentsInfo
     */
    protected $BillingDocumentsInfo = null;

    /**
     * @param ArrayOfBillingDocumentInfo $BillingDocumentsInfo
     */
    public function __construct($BillingDocumentsInfo = null)
    {
    $this->BillingDocumentsInfo = $BillingDocumentsInfo;
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
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoResponse
     */
    public function setBillingDocumentsInfo($BillingDocumentsInfo)
    {
        $this->BillingDocumentsInfo = $BillingDocumentsInfo;
        return $this;
    }

}
