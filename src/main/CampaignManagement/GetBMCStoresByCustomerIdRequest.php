<?php

namespace PMG\BingAds\CampaignManagement;

class GetBMCStoresByCustomerIdRequest
{

    /**
     * @var BMCStoreAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param BMCStoreAdditionalField $ReturnAdditionalFields
     */
    public function __construct($ReturnAdditionalFields = null)
    {
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return BMCStoreAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param BMCStoreAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetBMCStoresByCustomerIdRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
