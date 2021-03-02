<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportEntityIdsMappingRequest
{

    /**
     * @var string $ImportType
     */
    protected $ImportType = null;

    /**
     * @var ArrayOflong $SourceEntityIds
     */
    protected $SourceEntityIds = null;

    /**
     * @var ImportEntityType $ImportEntityType
     */
    protected $ImportEntityType = null;

    /**
     * @param string $ImportType
     * @param ArrayOflong $SourceEntityIds
     * @param ImportEntityType $ImportEntityType
     */
    public function __construct($ImportType = null, $SourceEntityIds = null, $ImportEntityType = null)
    {
    $this->ImportType = $ImportType;
    $this->SourceEntityIds = $SourceEntityIds;
    $this->ImportEntityType = $ImportEntityType;
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
     * @return \PMG\BingAds\CampaignManagement\GetImportEntityIdsMappingRequest
     */
    public function setImportType($ImportType)
    {
        $this->ImportType = $ImportType;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getSourceEntityIds()
    {
        return $this->SourceEntityIds;
    }

    /**
     * @param ArrayOflong $SourceEntityIds
     * @return \PMG\BingAds\CampaignManagement\GetImportEntityIdsMappingRequest
     */
    public function setSourceEntityIds($SourceEntityIds)
    {
        $this->SourceEntityIds = $SourceEntityIds;
        return $this;
    }

    /**
     * @return ImportEntityType
     */
    public function getImportEntityType()
    {
        return $this->ImportEntityType;
    }

    /**
     * @param ImportEntityType $ImportEntityType
     * @return \PMG\BingAds\CampaignManagement\GetImportEntityIdsMappingRequest
     */
    public function setImportEntityType($ImportEntityType)
    {
        $this->ImportEntityType = $ImportEntityType;
        return $this;
    }

}
