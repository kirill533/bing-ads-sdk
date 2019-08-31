<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionsEditorialReasonsResponse
{

    /**
     * @var ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     */
    protected $EditorialReasons = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($EditorialReasons = null, $PartialErrors = null)
    {
    $this->EditorialReasons = $EditorialReasons;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfAdExtensionEditorialReasonCollection
     */
    public function getEditorialReasons()
    {
        return $this->EditorialReasons;
    }

    /**
     * @param ArrayOfAdExtensionEditorialReasonCollection $EditorialReasons
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsEditorialReasonsResponse
     */
    public function setEditorialReasons($EditorialReasons)
    {
        $this->EditorialReasons = $EditorialReasons;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsEditorialReasonsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
