<?php

namespace PMG\BingAds\Reporting;

class CampaignReportScope
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
     * @param int $AccountId
     * @param int $CampaignId
     */
    public function __construct($AccountId = null, $CampaignId = null)
    {
    $this->AccountId = $AccountId;
    $this->CampaignId = $CampaignId;
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
     * @return \PMG\BingAds\Reporting\CampaignReportScope
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
     * @return \PMG\BingAds\Reporting\CampaignReportScope
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

}
