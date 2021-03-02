<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportResultsRequest
{

    /**
     * @var string $ImportType
     */
    protected $ImportType = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @var ArrayOflong $ImportJobIds
     */
    protected $ImportJobIds = null;

    /**
     * @var ImportAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param string $ImportType
     * @param Paging $PageInfo
     * @param ArrayOflong $ImportJobIds
     * @param ImportAdditionalField $ReturnAdditionalFields
     */
    public function __construct($ImportType = null, $PageInfo = null, $ImportJobIds = null, $ReturnAdditionalFields = null)
    {
    $this->ImportType = $ImportType;
    $this->PageInfo = $PageInfo;
    $this->ImportJobIds = $ImportJobIds;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return string
     */
    public function getImportType()
    {
        return $this->ImportType;
    }

    /**
     * @param string $ImportType
     * @return \PMG\BingAds\CampaignManagement\GetImportResultsRequest
     */
    public function setImportType($ImportType)
    {
        $this->ImportType = $ImportType;
        return $this;
    }

    /**
     * @return Paging
     */
    public function getPageInfo()
    {
        return $this->PageInfo;
    }

    /**
     * @param Paging $PageInfo
     * @return \PMG\BingAds\CampaignManagement\GetImportResultsRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getImportJobIds()
    {
        return $this->ImportJobIds;
    }

    /**
     * @param ArrayOflong $ImportJobIds
     * @return \PMG\BingAds\CampaignManagement\GetImportResultsRequest
     */
    public function setImportJobIds($ImportJobIds)
    {
        $this->ImportJobIds = $ImportJobIds;
        return $this;
    }

    /**
     * @return ImportAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param ImportAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetImportResultsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
