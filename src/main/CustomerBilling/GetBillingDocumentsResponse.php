<?php

namespace PMG\BingAds\CustomerBilling;

class GetBillingDocumentsResponse
{

    /**
     * @var ArrayOfBillingDocument $BillingDocuments
     */
    protected $BillingDocuments = null;

    /**
     * @param ArrayOfBillingDocument $BillingDocuments
     */
    public function __construct($BillingDocuments = null)
    {
      $this->BillingDocuments = $BillingDocuments;
    }

    /**
     * @return ArrayOfBillingDocument
     */
    public function getBillingDocuments()
    {
      return $this->BillingDocuments;
    }

    /**
     * @param ArrayOfBillingDocument $BillingDocuments
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsResponse
     */
    public function setBillingDocuments($BillingDocuments)
    {
      $this->BillingDocuments = $BillingDocuments;
      return $this;
    }

}
