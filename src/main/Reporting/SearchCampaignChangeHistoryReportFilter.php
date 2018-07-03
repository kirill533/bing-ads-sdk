<?php

namespace PMG\BingAds\Reporting;

class SearchCampaignChangeHistoryReportFilter
{

    /**
     * @see \PMG\BingAds\Reporting\AdDistributionReportFilter for valid values
     *
     * @var list $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @see \PMG\BingAds\Reporting\ChangeTypeReportFilter for valid values
     *
     * @var list $HowChanged
     */
    protected $HowChanged = null;

    /**
     * @see \PMG\BingAds\Reporting\ChangeEntityReportFilter for valid values
     *
     * @var list $ItemChanged
     */
    protected $ItemChanged = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return list
     */
    public function getAdDistribution()
    {
      return $this->AdDistribution;
    }

    /**
     * @param list $AdDistribution
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
      return $this;
    }

    /**
     * @return list
     */
    public function getHowChanged()
    {
      return $this->HowChanged;
    }

    /**
     * @param list $HowChanged
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setHowChanged($HowChanged)
    {
      $this->HowChanged = $HowChanged;
      return $this;
    }

    /**
     * @return list
     */
    public function getItemChanged()
    {
      return $this->ItemChanged;
    }

    /**
     * @param list $ItemChanged
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportFilter
     */
    public function setItemChanged($ItemChanged)
    {
      $this->ItemChanged = $ItemChanged;
      return $this;
    }

}
