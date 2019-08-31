<?php

namespace PMG\BingAds\CampaignManagement;

class GetUetTagsByIdsResponse
{

    /**
     * @var ArrayOfUetTag $UetTags
     */
    protected $UetTags = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfUetTag $UetTags
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($UetTags = null, $PartialErrors = null)
    {
    $this->UetTags = $UetTags;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfUetTag
     */
    public function getUetTags()
    {
        return $this->UetTags;
    }

    /**
     * @param ArrayOfUetTag $UetTags
     * @return \PMG\BingAds\CampaignManagement\GetUetTagsByIdsResponse
     */
    public function setUetTags($UetTags)
    {
        $this->UetTags = $UetTags;
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
     * @return \PMG\BingAds\CampaignManagement\GetUetTagsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
