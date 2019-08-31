<?php

namespace PMG\BingAds\Reporting;

class AdGroupReportScope
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @param int $AccountId
     * @param int $CampaignId
     * @param int $AdGroupId
     */
    public function __construct($AccountId = null, $CampaignId = null, $AdGroupId = null)
    {
    $this->AccountId = $AccountId;
    $this->CampaignId = $CampaignId;
    $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\Reporting\AdGroupReportScope
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\Reporting\AdGroupReportScope
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\Reporting\AdGroupReportScope
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

}
