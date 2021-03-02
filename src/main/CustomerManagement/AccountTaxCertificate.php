<?php

namespace PMG\BingAds\CustomerManagement;

class AccountTaxCertificate
{

    /**
     * @var string $TaxCertificateBlobContainerName
     */
    protected $TaxCertificateBlobContainerName = null;

    /**
     * @var ArrayOfKeyValuePairOfstringbase64Binary $TaxCertificates
     */
    protected $TaxCertificates = null;

    /**
     * @var TaxCertificateStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTaxCertificateBlobContainerName()
    {
        return $this->TaxCertificateBlobContainerName;
    }

    /**
     * @param string $TaxCertificateBlobContainerName
     * @return \PMG\BingAds\CustomerManagement\AccountTaxCertificate
     */
    public function setTaxCertificateBlobContainerName($TaxCertificateBlobContainerName)
    {
        $this->TaxCertificateBlobContainerName = $TaxCertificateBlobContainerName;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringbase64Binary
     */
    public function getTaxCertificates()
    {
        return $this->TaxCertificates;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringbase64Binary $TaxCertificates
     * @return \PMG\BingAds\CustomerManagement\AccountTaxCertificate
     */
    public function setTaxCertificates($TaxCertificates)
    {
        $this->TaxCertificates = $TaxCertificates;
        return $this;
    }

    /**
     * @return TaxCertificateStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param TaxCertificateStatus $Status
     * @return \PMG\BingAds\CustomerManagement\AccountTaxCertificate
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

}
