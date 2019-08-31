<?php

namespace PMG\BingAds\Reporting;

class AccountThroughCampaignReportScope
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var ArrayOfCampaignReportScope $Campaigns
     */
    protected $Campaigns = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOflong
     */
    public function getAccountIds()
    {
        return $this->AccountIds;
    }

    /**
     * @param ArrayOflong $AccountIds
     * @return \PMG\BingAds\Reporting\AccountThroughCampaignReportScope
     */
    public function setAccountIds($AccountIds)
    {
        $this->AccountIds = $AccountIds;
        return $this;
    }

    /**
     * @return ArrayOfCampaignReportScope
     */
    public function getCampaigns()
    {
        return $this->Campaigns;
    }

    /**
     * @param ArrayOfCampaignReportScope $Campaigns
     * @return \PMG\BingAds\Reporting\AccountThroughCampaignReportScope
     */
    public function setCampaigns($Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }

}
