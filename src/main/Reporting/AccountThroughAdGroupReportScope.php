<?php

namespace PMG\BingAds\Reporting;

class AccountThroughAdGroupReportScope
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var ArrayOfAdGroupReportScope $AdGroups
     */
    protected $AdGroups = null;

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
     * @return \PMG\BingAds\Reporting\AccountThroughAdGroupReportScope
     */
    public function setAccountIds($AccountIds)
    {
      $this->AccountIds = $AccountIds;
      return $this;
    }

    /**
     * @return ArrayOfAdGroupReportScope
     */
    public function getAdGroups()
    {
      return $this->AdGroups;
    }

    /**
     * @param ArrayOfAdGroupReportScope $AdGroups
     * @return \PMG\BingAds\Reporting\AccountThroughAdGroupReportScope
     */
    public function setAdGroups($AdGroups)
    {
      $this->AdGroups = $AdGroups;
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
     * @return \PMG\BingAds\Reporting\AccountThroughAdGroupReportScope
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

}
