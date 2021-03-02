<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportJobsByIdsRequest
{

    /**
     * @var ArrayOflong $ImportJobIds
     */
    protected $ImportJobIds = null;

    /**
     * @var string $ImportType
     */
    protected $ImportType = null;

    /**
     * @var ImportAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param ArrayOflong $ImportJobIds
     * @param string $ImportType
     * @param ImportAdditionalField $ReturnAdditionalFields
     */
    public function __construct($ImportJobIds = null, $ImportType = null, $ReturnAdditionalFields = null)
    {
    $this->ImportJobIds = $ImportJobIds;
    $this->ImportType = $ImportType;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
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
     * @return \PMG\BingAds\CampaignManagement\GetImportJobsByIdsRequest
     */
    public function setImportJobIds($ImportJobIds)
    {
        $this->ImportJobIds = $ImportJobIds;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\GetImportJobsByIdsRequest
     */
    public function setImportType($ImportType)
    {
        $this->ImportType = $ImportType;
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
     * @return \PMG\BingAds\CampaignManagement\GetImportJobsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
