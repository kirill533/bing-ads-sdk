<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteAdExtensionsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $AdExtensionIds
     */
    protected $AdExtensionIds = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $AdExtensionIds
     */
    public function __construct($AccountId = null, $AdExtensionIds = null)
    {
    $this->AccountId = $AccountId;
    $this->AdExtensionIds = $AdExtensionIds;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\DeleteAdExtensionsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdExtensionIds()
    {
        return $this->AdExtensionIds;
    }

    /**
     * @param ArrayOflong $AdExtensionIds
     * @return \PMG\BingAds\CampaignManagement\DeleteAdExtensionsRequest
     */
    public function setAdExtensionIds($AdExtensionIds)
    {
        $this->AdExtensionIds = $AdExtensionIds;
        return $this;
    }

}
