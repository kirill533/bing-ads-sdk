<?php

namespace PMG\BingAds\Reporting;

class ShareOfVoiceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var BidMatchTypeReportFilter $BidMatchType
     */
    protected $BidMatchType = null;

    /**
     * @var BidStrategyTypeReportFilter $BidStrategyType
     */
    protected $BidStrategyType = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DeliveredMatchTypeReportFilter $DeliveredMatchType
     */
    protected $DeliveredMatchType = null;

    /**
     * @var DeviceTypeReportFilter $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var KeywordStatusReportFilter $KeywordStatus
     */
    protected $KeywordStatus = null;

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    /**
     * @var ArrayOfstring $LanguageCode
     */
    protected $LanguageCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountStatusReportFilter
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param AccountStatusReportFilter $AccountStatus
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
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
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
        $this->AdDistribution = $AdDistribution;
        return $this;
    }

    /**
     * @return AdGroupStatusReportFilter
     */
    public function getAdGroupStatus()
    {
        return $this->AdGroupStatus;
    }

    /**
     * @param AdGroupStatusReportFilter $AdGroupStatus
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
        return $this;
    }

    /**
     * @return BidMatchTypeReportFilter
     */
    public function getBidMatchType()
    {
        return $this->BidMatchType;
    }

    /**
     * @param BidMatchTypeReportFilter $BidMatchType
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setBidMatchType($BidMatchType)
    {
        $this->BidMatchType = $BidMatchType;
        return $this;
    }

    /**
     * @return BidStrategyTypeReportFilter
     */
    public function getBidStrategyType()
    {
        return $this->BidStrategyType;
    }

    /**
     * @param BidStrategyTypeReportFilter $BidStrategyType
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setBidStrategyType($BidStrategyType)
    {
        $this->BidStrategyType = $BidStrategyType;
        return $this;
    }

    /**
     * @return CampaignStatusReportFilter
     */
    public function getCampaignStatus()
    {
        return $this->CampaignStatus;
    }

    /**
     * @param CampaignStatusReportFilter $CampaignStatus
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
        $this->CampaignStatus = $CampaignStatus;
        return $this;
    }

    /**
     * @return DeliveredMatchTypeReportFilter
     */
    public function getDeliveredMatchType()
    {
        return $this->DeliveredMatchType;
    }

    /**
     * @param DeliveredMatchTypeReportFilter $DeliveredMatchType
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setDeliveredMatchType($DeliveredMatchType)
    {
        $this->DeliveredMatchType = $DeliveredMatchType;
        return $this;
    }

    /**
     * @return DeviceTypeReportFilter
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * @param DeviceTypeReportFilter $DeviceType
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;
        return $this;
    }

    /**
     * @return KeywordStatusReportFilter
     */
    public function getKeywordStatus()
    {
        return $this->KeywordStatus;
    }

    /**
     * @param KeywordStatusReportFilter $KeywordStatus
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
        $this->KeywordStatus = $KeywordStatus;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * @param ArrayOfstring $Keywords
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param ArrayOfstring $LanguageCode
     * @return \PMG\BingAds\Reporting\ShareOfVoiceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

}
