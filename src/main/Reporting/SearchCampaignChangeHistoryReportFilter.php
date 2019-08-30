<?php

namespace PMG\BingAds\Reporting;

class SearchCampaignChangeHistoryReportFilter
{

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var ChangeTypeReportFilter $HowChanged
     */
    protected $HowChanged = null;

    /**
     * @var ChangeEntityReportFilter $ItemChanged
     */
    protected $ItemChanged = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdDistributionReportFilter
     */
    public function getAdDistribution()
    {
        return $this->AdDistribution;
    }

    /**
     * @param AdDistributionReportFilter $AdDistribution
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
        $this->AdDistribution = $AdDistribution;
        return $this;
    }

    /**
     * @return ChangeTypeReportFilter
     */
    public function getHowChanged()
    {
        return $this->HowChanged;
    }

    /**
     * @param ChangeTypeReportFilter $HowChanged
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setHowChanged($HowChanged)
    {
        $this->HowChanged = $HowChanged;
        return $this;
    }

    /**
     * @return ChangeEntityReportFilter
     */
    public function getItemChanged()
    {
        return $this->ItemChanged;
    }

    /**
     * @param ChangeEntityReportFilter $ItemChanged
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setItemChanged($ItemChanged)
    {
        $this->ItemChanged = $ItemChanged;
        return $this;
    }

}
