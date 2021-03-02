<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportEntityIdsMappingResponse
{

    /**
     * @var ArrayOfKeyValuePairOflonglong $EntityIdsMapping
     */
    protected $EntityIdsMapping = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfKeyValuePairOflonglong $EntityIdsMapping
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($EntityIdsMapping = null, $PartialErrors = null)
    {
    $this->EntityIdsMapping = $EntityIdsMapping;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfKeyValuePairOflonglong
     */
    public function getEntityIdsMapping()
    {
        return $this->EntityIdsMapping;
    }

    /**
     * @param ArrayOfKeyValuePairOflonglong $EntityIdsMapping
     * @return \PMG\BingAds\CampaignManagement\GetImportEntityIdsMappingResponse
     */
    public function setEntityIdsMapping($EntityIdsMapping)
    {
        $this->EntityIdsMapping = $EntityIdsMapping;
        return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
        return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignManagement\GetImportEntityIdsMappingResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
