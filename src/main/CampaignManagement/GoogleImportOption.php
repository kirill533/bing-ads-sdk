<?php

namespace PMG\BingAds\CampaignManagement;

class GoogleImportOption extends ImportOption
{

    /**
     * @var boolean $AccountUrlOptions
     */
    protected $AccountUrlOptions = null;

    /**
     * @var float $AdjustmentForBids
     */
    protected $AdjustmentForBids = null;

    /**
     * @var float $AdjustmentForCampaignBudgets
     */
    protected $AdjustmentForCampaignBudgets = null;

    /**
     * @var int $AssociatedStoreId
     */
    protected $AssociatedStoreId = null;

    /**
     * @var int $AssociatedUetTagId
     */
    protected $AssociatedUetTagId = null;

    /**
     * @var boolean $AutoDeviceBidOptimization
     */
    protected $AutoDeviceBidOptimization = null;

    /**
     * @var boolean $DeleteRemovedEntities
     */
    protected $DeleteRemovedEntities = null;

    /**
     * @var boolean $EnableAutoCurrencyConversion
     */
    protected $EnableAutoCurrencyConversion = null;

    /**
     * @var boolean $EnableParentLocationMapping
     */
    protected $EnableParentLocationMapping = null;

    /**
     * @var boolean $NewActiveAdsForExistingAdGroups
     */
    protected $NewActiveAdsForExistingAdGroups = null;

    /**
     * @var boolean $NewActiveCampaignsAndChildEntities
     */
    protected $NewActiveCampaignsAndChildEntities = null;

    /**
     * @var boolean $NewAdCustomizerFeeds
     */
    protected $NewAdCustomizerFeeds = null;

    /**
     * @var boolean $NewAdGroupsAndChildEntitiesForExistingCampaigns
     */
    protected $NewAdGroupsAndChildEntitiesForExistingCampaigns = null;

    /**
     * @var boolean $NewAdSchedules
     */
    protected $NewAdSchedules = null;

    /**
     * @var boolean $NewAppAdExtensions
     */
    protected $NewAppAdExtensions = null;

    /**
     * @var boolean $NewAudienceTargets
     */
    protected $NewAudienceTargets = null;

    /**
     * @var boolean $NewCallAdExtensions
     */
    protected $NewCallAdExtensions = null;

    /**
     * @var boolean $NewCalloutAdExtensions
     */
    protected $NewCalloutAdExtensions = null;

    /**
     * @var boolean $NewDemographicTargets
     */
    protected $NewDemographicTargets = null;

    /**
     * @var boolean $NewDeviceTargets
     */
    protected $NewDeviceTargets = null;

    /**
     * @var boolean $NewEntities
     */
    protected $NewEntities = null;

    /**
     * @var boolean $NewKeywordUrls
     */
    protected $NewKeywordUrls = null;

    /**
     * @var boolean $NewKeywordsForExistingAdGroups
     */
    protected $NewKeywordsForExistingAdGroups = null;

    /**
     * @var boolean $NewLabels
     */
    protected $NewLabels = null;

    /**
     * @var boolean $NewLocationAdExtensions
     */
    protected $NewLocationAdExtensions = null;

    /**
     * @var boolean $NewLocationTargets
     */
    protected $NewLocationTargets = null;

    /**
     * @var boolean $NewNegativeKeywordLists
     */
    protected $NewNegativeKeywordLists = null;

    /**
     * @var boolean $NewNegativeKeywordsForExistingParents
     */
    protected $NewNegativeKeywordsForExistingParents = null;

    /**
     * @var boolean $NewNegativeSites
     */
    protected $NewNegativeSites = null;

    /**
     * @var boolean $NewPageFeeds
     */
    protected $NewPageFeeds = null;

    /**
     * @var boolean $NewPausedAdsForExistingAdGroups
     */
    protected $NewPausedAdsForExistingAdGroups = null;

    /**
     * @var boolean $NewPausedCampaignsAndChildEntities
     */
    protected $NewPausedCampaignsAndChildEntities = null;

    /**
     * @var boolean $NewPriceAdExtensions
     */
    protected $NewPriceAdExtensions = null;

    /**
     * @var boolean $NewProductFilters
     */
    protected $NewProductFilters = null;

    /**
     * @var boolean $NewPromotionAdExtensions
     */
    protected $NewPromotionAdExtensions = null;

    /**
     * @var boolean $NewReviewAdExtensions
     */
    protected $NewReviewAdExtensions = null;

    /**
     * @var boolean $NewSitelinkAdExtensions
     */
    protected $NewSitelinkAdExtensions = null;

    /**
     * @var boolean $NewStructuredSnippetAdExtensions
     */
    protected $NewStructuredSnippetAdExtensions = null;

    /**
     * @var boolean $NewUrlOptions
     */
    protected $NewUrlOptions = null;

    /**
     * @var boolean $PauseCampaignsWithoutSupportedLocations
     */
    protected $PauseCampaignsWithoutSupportedLocations = null;

    /**
     * @var boolean $PauseNewCampaigns
     */
    protected $PauseNewCampaigns = null;

    /**
     * @var boolean $RaiseBidsToMinimum
     */
    protected $RaiseBidsToMinimum = null;

    /**
     * @var boolean $RaiseCampaignBudgetsToMinimum
     */
    protected $RaiseCampaignBudgetsToMinimum = null;

    /**
     * @var boolean $RaiseProductGroupBidsToMinimum
     */
    protected $RaiseProductGroupBidsToMinimum = null;

    /**
     * @var boolean $SearchAndDsaMixedCampaignAsSearchCampaign
     */
    protected $SearchAndDsaMixedCampaignAsSearchCampaign = null;

    /**
     * @var ImportSearchAndReplaceForStringProperty $SearchAndReplaceForCampaignNames
     */
    protected $SearchAndReplaceForCampaignNames = null;

    /**
     * @var ImportSearchAndReplaceForStringProperty $SearchAndReplaceForTrackingTemplates
     */
    protected $SearchAndReplaceForTrackingTemplates = null;

    /**
     * @var ImportSearchAndReplaceForStringProperty $SearchAndReplaceForUrls
     */
    protected $SearchAndReplaceForUrls = null;

    /**
     * @var string $SuffixForCampaignNames
     */
    protected $SuffixForCampaignNames = null;

    /**
     * @var string $SuffixForTrackingTemplates
     */
    protected $SuffixForTrackingTemplates = null;

    /**
     * @var string $SuffixForUrls
     */
    protected $SuffixForUrls = null;

    /**
     * @var boolean $UpdateAdCustomizerFeeds
     */
    protected $UpdateAdCustomizerFeeds = null;

    /**
     * @var boolean $UpdateAdGroupNetwork
     */
    protected $UpdateAdGroupNetwork = null;

    /**
     * @var boolean $UpdateAdSchedules
     */
    protected $UpdateAdSchedules = null;

    /**
     * @var boolean $UpdateAppAdExtensions
     */
    protected $UpdateAppAdExtensions = null;

    /**
     * @var boolean $UpdateAudienceTargets
     */
    protected $UpdateAudienceTargets = null;

    /**
     * @var boolean $UpdateBiddingStrategies
     */
    protected $UpdateBiddingStrategies = null;

    /**
     * @var boolean $UpdateBids
     */
    protected $UpdateBids = null;

    /**
     * @var boolean $UpdateCallAdExtensions
     */
    protected $UpdateCallAdExtensions = null;

    /**
     * @var boolean $UpdateCalloutAdExtensions
     */
    protected $UpdateCalloutAdExtensions = null;

    /**
     * @var boolean $UpdateCampaignAdGroupLanguages
     */
    protected $UpdateCampaignAdGroupLanguages = null;

    /**
     * @var boolean $UpdateCampaignBudgets
     */
    protected $UpdateCampaignBudgets = null;

    /**
     * @var boolean $UpdateCampaignNames
     */
    protected $UpdateCampaignNames = null;

    /**
     * @var boolean $UpdateDemographicTargets
     */
    protected $UpdateDemographicTargets = null;

    /**
     * @var boolean $UpdateDeviceTargets
     */
    protected $UpdateDeviceTargets = null;

    /**
     * @var boolean $UpdateEntities
     */
    protected $UpdateEntities = null;

    /**
     * @var boolean $UpdateKeywordUrls
     */
    protected $UpdateKeywordUrls = null;

    /**
     * @var boolean $UpdateLabels
     */
    protected $UpdateLabels = null;

    /**
     * @var boolean $UpdateLocationAdExtensions
     */
    protected $UpdateLocationAdExtensions = null;

    /**
     * @var boolean $UpdateLocationTargets
     */
    protected $UpdateLocationTargets = null;

    /**
     * @var boolean $UpdateNegativeKeywordLists
     */
    protected $UpdateNegativeKeywordLists = null;

    /**
     * @var boolean $UpdateNegativeSites
     */
    protected $UpdateNegativeSites = null;

    /**
     * @var boolean $UpdatePageFeeds
     */
    protected $UpdatePageFeeds = null;

    /**
     * @var boolean $UpdatePriceAdExtensions
     */
    protected $UpdatePriceAdExtensions = null;

    /**
     * @var boolean $UpdateProductFilters
     */
    protected $UpdateProductFilters = null;

    /**
     * @var boolean $UpdatePromotionAdExtensions
     */
    protected $UpdatePromotionAdExtensions = null;

    /**
     * @var boolean $UpdateReviewAdExtensions
     */
    protected $UpdateReviewAdExtensions = null;

    /**
     * @var boolean $UpdateSitelinkAdExtensions
     */
    protected $UpdateSitelinkAdExtensions = null;

    /**
     * @var boolean $UpdateStatusForAdGroups
     */
    protected $UpdateStatusForAdGroups = null;

    /**
     * @var boolean $UpdateStatusForAds
     */
    protected $UpdateStatusForAds = null;

    /**
     * @var boolean $UpdateStatusForCampaigns
     */
    protected $UpdateStatusForCampaigns = null;

    /**
     * @var boolean $UpdateStatusForKeywords
     */
    protected $UpdateStatusForKeywords = null;

    /**
     * @var boolean $UpdateStructuredSnippetAdExtensions
     */
    protected $UpdateStructuredSnippetAdExtensions = null;

    /**
     * @var boolean $UpdateUrlOptions
     */
    protected $UpdateUrlOptions = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAccountUrlOptions()
    {
        return $this->AccountUrlOptions;
    }

    /**
     * @param boolean $AccountUrlOptions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAccountUrlOptions($AccountUrlOptions)
    {
        $this->AccountUrlOptions = $AccountUrlOptions;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentForBids()
    {
        return $this->AdjustmentForBids;
    }

    /**
     * @param float $AdjustmentForBids
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAdjustmentForBids($AdjustmentForBids)
    {
        $this->AdjustmentForBids = $AdjustmentForBids;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentForCampaignBudgets()
    {
        return $this->AdjustmentForCampaignBudgets;
    }

    /**
     * @param float $AdjustmentForCampaignBudgets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAdjustmentForCampaignBudgets($AdjustmentForCampaignBudgets)
    {
        $this->AdjustmentForCampaignBudgets = $AdjustmentForCampaignBudgets;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssociatedStoreId()
    {
        return $this->AssociatedStoreId;
    }

    /**
     * @param int $AssociatedStoreId
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAssociatedStoreId($AssociatedStoreId)
    {
        $this->AssociatedStoreId = $AssociatedStoreId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssociatedUetTagId()
    {
        return $this->AssociatedUetTagId;
    }

    /**
     * @param int $AssociatedUetTagId
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAssociatedUetTagId($AssociatedUetTagId)
    {
        $this->AssociatedUetTagId = $AssociatedUetTagId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoDeviceBidOptimization()
    {
        return $this->AutoDeviceBidOptimization;
    }

    /**
     * @param boolean $AutoDeviceBidOptimization
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setAutoDeviceBidOptimization($AutoDeviceBidOptimization)
    {
        $this->AutoDeviceBidOptimization = $AutoDeviceBidOptimization;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleteRemovedEntities()
    {
        return $this->DeleteRemovedEntities;
    }

    /**
     * @param boolean $DeleteRemovedEntities
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setDeleteRemovedEntities($DeleteRemovedEntities)
    {
        $this->DeleteRemovedEntities = $DeleteRemovedEntities;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableAutoCurrencyConversion()
    {
        return $this->EnableAutoCurrencyConversion;
    }

    /**
     * @param boolean $EnableAutoCurrencyConversion
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setEnableAutoCurrencyConversion($EnableAutoCurrencyConversion)
    {
        $this->EnableAutoCurrencyConversion = $EnableAutoCurrencyConversion;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableParentLocationMapping()
    {
        return $this->EnableParentLocationMapping;
    }

    /**
     * @param boolean $EnableParentLocationMapping
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setEnableParentLocationMapping($EnableParentLocationMapping)
    {
        $this->EnableParentLocationMapping = $EnableParentLocationMapping;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewActiveAdsForExistingAdGroups()
    {
        return $this->NewActiveAdsForExistingAdGroups;
    }

    /**
     * @param boolean $NewActiveAdsForExistingAdGroups
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewActiveAdsForExistingAdGroups($NewActiveAdsForExistingAdGroups)
    {
        $this->NewActiveAdsForExistingAdGroups = $NewActiveAdsForExistingAdGroups;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewActiveCampaignsAndChildEntities()
    {
        return $this->NewActiveCampaignsAndChildEntities;
    }

    /**
     * @param boolean $NewActiveCampaignsAndChildEntities
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewActiveCampaignsAndChildEntities($NewActiveCampaignsAndChildEntities)
    {
        $this->NewActiveCampaignsAndChildEntities = $NewActiveCampaignsAndChildEntities;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewAdCustomizerFeeds()
    {
        return $this->NewAdCustomizerFeeds;
    }

    /**
     * @param boolean $NewAdCustomizerFeeds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewAdCustomizerFeeds($NewAdCustomizerFeeds)
    {
        $this->NewAdCustomizerFeeds = $NewAdCustomizerFeeds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewAdGroupsAndChildEntitiesForExistingCampaigns()
    {
        return $this->NewAdGroupsAndChildEntitiesForExistingCampaigns;
    }

    /**
     * @param boolean $NewAdGroupsAndChildEntitiesForExistingCampaigns
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewAdGroupsAndChildEntitiesForExistingCampaigns($NewAdGroupsAndChildEntitiesForExistingCampaigns)
    {
        $this->NewAdGroupsAndChildEntitiesForExistingCampaigns = $NewAdGroupsAndChildEntitiesForExistingCampaigns;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewAdSchedules()
    {
        return $this->NewAdSchedules;
    }

    /**
     * @param boolean $NewAdSchedules
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewAdSchedules($NewAdSchedules)
    {
        $this->NewAdSchedules = $NewAdSchedules;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewAppAdExtensions()
    {
        return $this->NewAppAdExtensions;
    }

    /**
     * @param boolean $NewAppAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewAppAdExtensions($NewAppAdExtensions)
    {
        $this->NewAppAdExtensions = $NewAppAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewAudienceTargets()
    {
        return $this->NewAudienceTargets;
    }

    /**
     * @param boolean $NewAudienceTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewAudienceTargets($NewAudienceTargets)
    {
        $this->NewAudienceTargets = $NewAudienceTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewCallAdExtensions()
    {
        return $this->NewCallAdExtensions;
    }

    /**
     * @param boolean $NewCallAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewCallAdExtensions($NewCallAdExtensions)
    {
        $this->NewCallAdExtensions = $NewCallAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewCalloutAdExtensions()
    {
        return $this->NewCalloutAdExtensions;
    }

    /**
     * @param boolean $NewCalloutAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewCalloutAdExtensions($NewCalloutAdExtensions)
    {
        $this->NewCalloutAdExtensions = $NewCalloutAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewDemographicTargets()
    {
        return $this->NewDemographicTargets;
    }

    /**
     * @param boolean $NewDemographicTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewDemographicTargets($NewDemographicTargets)
    {
        $this->NewDemographicTargets = $NewDemographicTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewDeviceTargets()
    {
        return $this->NewDeviceTargets;
    }

    /**
     * @param boolean $NewDeviceTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewDeviceTargets($NewDeviceTargets)
    {
        $this->NewDeviceTargets = $NewDeviceTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewEntities()
    {
        return $this->NewEntities;
    }

    /**
     * @param boolean $NewEntities
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewEntities($NewEntities)
    {
        $this->NewEntities = $NewEntities;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewKeywordUrls()
    {
        return $this->NewKeywordUrls;
    }

    /**
     * @param boolean $NewKeywordUrls
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewKeywordUrls($NewKeywordUrls)
    {
        $this->NewKeywordUrls = $NewKeywordUrls;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewKeywordsForExistingAdGroups()
    {
        return $this->NewKeywordsForExistingAdGroups;
    }

    /**
     * @param boolean $NewKeywordsForExistingAdGroups
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewKeywordsForExistingAdGroups($NewKeywordsForExistingAdGroups)
    {
        $this->NewKeywordsForExistingAdGroups = $NewKeywordsForExistingAdGroups;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewLabels()
    {
        return $this->NewLabels;
    }

    /**
     * @param boolean $NewLabels
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewLabels($NewLabels)
    {
        $this->NewLabels = $NewLabels;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewLocationAdExtensions()
    {
        return $this->NewLocationAdExtensions;
    }

    /**
     * @param boolean $NewLocationAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewLocationAdExtensions($NewLocationAdExtensions)
    {
        $this->NewLocationAdExtensions = $NewLocationAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewLocationTargets()
    {
        return $this->NewLocationTargets;
    }

    /**
     * @param boolean $NewLocationTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewLocationTargets($NewLocationTargets)
    {
        $this->NewLocationTargets = $NewLocationTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewNegativeKeywordLists()
    {
        return $this->NewNegativeKeywordLists;
    }

    /**
     * @param boolean $NewNegativeKeywordLists
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewNegativeKeywordLists($NewNegativeKeywordLists)
    {
        $this->NewNegativeKeywordLists = $NewNegativeKeywordLists;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewNegativeKeywordsForExistingParents()
    {
        return $this->NewNegativeKeywordsForExistingParents;
    }

    /**
     * @param boolean $NewNegativeKeywordsForExistingParents
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewNegativeKeywordsForExistingParents($NewNegativeKeywordsForExistingParents)
    {
        $this->NewNegativeKeywordsForExistingParents = $NewNegativeKeywordsForExistingParents;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewNegativeSites()
    {
        return $this->NewNegativeSites;
    }

    /**
     * @param boolean $NewNegativeSites
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewNegativeSites($NewNegativeSites)
    {
        $this->NewNegativeSites = $NewNegativeSites;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewPageFeeds()
    {
        return $this->NewPageFeeds;
    }

    /**
     * @param boolean $NewPageFeeds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewPageFeeds($NewPageFeeds)
    {
        $this->NewPageFeeds = $NewPageFeeds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewPausedAdsForExistingAdGroups()
    {
        return $this->NewPausedAdsForExistingAdGroups;
    }

    /**
     * @param boolean $NewPausedAdsForExistingAdGroups
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewPausedAdsForExistingAdGroups($NewPausedAdsForExistingAdGroups)
    {
        $this->NewPausedAdsForExistingAdGroups = $NewPausedAdsForExistingAdGroups;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewPausedCampaignsAndChildEntities()
    {
        return $this->NewPausedCampaignsAndChildEntities;
    }

    /**
     * @param boolean $NewPausedCampaignsAndChildEntities
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewPausedCampaignsAndChildEntities($NewPausedCampaignsAndChildEntities)
    {
        $this->NewPausedCampaignsAndChildEntities = $NewPausedCampaignsAndChildEntities;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewPriceAdExtensions()
    {
        return $this->NewPriceAdExtensions;
    }

    /**
     * @param boolean $NewPriceAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewPriceAdExtensions($NewPriceAdExtensions)
    {
        $this->NewPriceAdExtensions = $NewPriceAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewProductFilters()
    {
        return $this->NewProductFilters;
    }

    /**
     * @param boolean $NewProductFilters
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewProductFilters($NewProductFilters)
    {
        $this->NewProductFilters = $NewProductFilters;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewPromotionAdExtensions()
    {
        return $this->NewPromotionAdExtensions;
    }

    /**
     * @param boolean $NewPromotionAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewPromotionAdExtensions($NewPromotionAdExtensions)
    {
        $this->NewPromotionAdExtensions = $NewPromotionAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewReviewAdExtensions()
    {
        return $this->NewReviewAdExtensions;
    }

    /**
     * @param boolean $NewReviewAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewReviewAdExtensions($NewReviewAdExtensions)
    {
        $this->NewReviewAdExtensions = $NewReviewAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewSitelinkAdExtensions()
    {
        return $this->NewSitelinkAdExtensions;
    }

    /**
     * @param boolean $NewSitelinkAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewSitelinkAdExtensions($NewSitelinkAdExtensions)
    {
        $this->NewSitelinkAdExtensions = $NewSitelinkAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewStructuredSnippetAdExtensions()
    {
        return $this->NewStructuredSnippetAdExtensions;
    }

    /**
     * @param boolean $NewStructuredSnippetAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewStructuredSnippetAdExtensions($NewStructuredSnippetAdExtensions)
    {
        $this->NewStructuredSnippetAdExtensions = $NewStructuredSnippetAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNewUrlOptions()
    {
        return $this->NewUrlOptions;
    }

    /**
     * @param boolean $NewUrlOptions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setNewUrlOptions($NewUrlOptions)
    {
        $this->NewUrlOptions = $NewUrlOptions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPauseCampaignsWithoutSupportedLocations()
    {
        return $this->PauseCampaignsWithoutSupportedLocations;
    }

    /**
     * @param boolean $PauseCampaignsWithoutSupportedLocations
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setPauseCampaignsWithoutSupportedLocations($PauseCampaignsWithoutSupportedLocations)
    {
        $this->PauseCampaignsWithoutSupportedLocations = $PauseCampaignsWithoutSupportedLocations;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPauseNewCampaigns()
    {
        return $this->PauseNewCampaigns;
    }

    /**
     * @param boolean $PauseNewCampaigns
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setPauseNewCampaigns($PauseNewCampaigns)
    {
        $this->PauseNewCampaigns = $PauseNewCampaigns;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRaiseBidsToMinimum()
    {
        return $this->RaiseBidsToMinimum;
    }

    /**
     * @param boolean $RaiseBidsToMinimum
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setRaiseBidsToMinimum($RaiseBidsToMinimum)
    {
        $this->RaiseBidsToMinimum = $RaiseBidsToMinimum;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRaiseCampaignBudgetsToMinimum()
    {
        return $this->RaiseCampaignBudgetsToMinimum;
    }

    /**
     * @param boolean $RaiseCampaignBudgetsToMinimum
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setRaiseCampaignBudgetsToMinimum($RaiseCampaignBudgetsToMinimum)
    {
        $this->RaiseCampaignBudgetsToMinimum = $RaiseCampaignBudgetsToMinimum;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRaiseProductGroupBidsToMinimum()
    {
        return $this->RaiseProductGroupBidsToMinimum;
    }

    /**
     * @param boolean $RaiseProductGroupBidsToMinimum
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setRaiseProductGroupBidsToMinimum($RaiseProductGroupBidsToMinimum)
    {
        $this->RaiseProductGroupBidsToMinimum = $RaiseProductGroupBidsToMinimum;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchAndDsaMixedCampaignAsSearchCampaign()
    {
        return $this->SearchAndDsaMixedCampaignAsSearchCampaign;
    }

    /**
     * @param boolean $SearchAndDsaMixedCampaignAsSearchCampaign
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSearchAndDsaMixedCampaignAsSearchCampaign($SearchAndDsaMixedCampaignAsSearchCampaign)
    {
        $this->SearchAndDsaMixedCampaignAsSearchCampaign = $SearchAndDsaMixedCampaignAsSearchCampaign;
        return $this;
    }

    /**
     * @return ImportSearchAndReplaceForStringProperty
     */
    public function getSearchAndReplaceForCampaignNames()
    {
        return $this->SearchAndReplaceForCampaignNames;
    }

    /**
     * @param ImportSearchAndReplaceForStringProperty $SearchAndReplaceForCampaignNames
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSearchAndReplaceForCampaignNames($SearchAndReplaceForCampaignNames)
    {
        $this->SearchAndReplaceForCampaignNames = $SearchAndReplaceForCampaignNames;
        return $this;
    }

    /**
     * @return ImportSearchAndReplaceForStringProperty
     */
    public function getSearchAndReplaceForTrackingTemplates()
    {
        return $this->SearchAndReplaceForTrackingTemplates;
    }

    /**
     * @param ImportSearchAndReplaceForStringProperty $SearchAndReplaceForTrackingTemplates
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSearchAndReplaceForTrackingTemplates($SearchAndReplaceForTrackingTemplates)
    {
        $this->SearchAndReplaceForTrackingTemplates = $SearchAndReplaceForTrackingTemplates;
        return $this;
    }

    /**
     * @return ImportSearchAndReplaceForStringProperty
     */
    public function getSearchAndReplaceForUrls()
    {
        return $this->SearchAndReplaceForUrls;
    }

    /**
     * @param ImportSearchAndReplaceForStringProperty $SearchAndReplaceForUrls
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSearchAndReplaceForUrls($SearchAndReplaceForUrls)
    {
        $this->SearchAndReplaceForUrls = $SearchAndReplaceForUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffixForCampaignNames()
    {
        return $this->SuffixForCampaignNames;
    }

    /**
     * @param string $SuffixForCampaignNames
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSuffixForCampaignNames($SuffixForCampaignNames)
    {
        $this->SuffixForCampaignNames = $SuffixForCampaignNames;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffixForTrackingTemplates()
    {
        return $this->SuffixForTrackingTemplates;
    }

    /**
     * @param string $SuffixForTrackingTemplates
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSuffixForTrackingTemplates($SuffixForTrackingTemplates)
    {
        $this->SuffixForTrackingTemplates = $SuffixForTrackingTemplates;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffixForUrls()
    {
        return $this->SuffixForUrls;
    }

    /**
     * @param string $SuffixForUrls
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setSuffixForUrls($SuffixForUrls)
    {
        $this->SuffixForUrls = $SuffixForUrls;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAdCustomizerFeeds()
    {
        return $this->UpdateAdCustomizerFeeds;
    }

    /**
     * @param boolean $UpdateAdCustomizerFeeds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateAdCustomizerFeeds($UpdateAdCustomizerFeeds)
    {
        $this->UpdateAdCustomizerFeeds = $UpdateAdCustomizerFeeds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAdGroupNetwork()
    {
        return $this->UpdateAdGroupNetwork;
    }

    /**
     * @param boolean $UpdateAdGroupNetwork
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateAdGroupNetwork($UpdateAdGroupNetwork)
    {
        $this->UpdateAdGroupNetwork = $UpdateAdGroupNetwork;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAdSchedules()
    {
        return $this->UpdateAdSchedules;
    }

    /**
     * @param boolean $UpdateAdSchedules
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateAdSchedules($UpdateAdSchedules)
    {
        $this->UpdateAdSchedules = $UpdateAdSchedules;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAppAdExtensions()
    {
        return $this->UpdateAppAdExtensions;
    }

    /**
     * @param boolean $UpdateAppAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateAppAdExtensions($UpdateAppAdExtensions)
    {
        $this->UpdateAppAdExtensions = $UpdateAppAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAudienceTargets()
    {
        return $this->UpdateAudienceTargets;
    }

    /**
     * @param boolean $UpdateAudienceTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateAudienceTargets($UpdateAudienceTargets)
    {
        $this->UpdateAudienceTargets = $UpdateAudienceTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateBiddingStrategies()
    {
        return $this->UpdateBiddingStrategies;
    }

    /**
     * @param boolean $UpdateBiddingStrategies
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateBiddingStrategies($UpdateBiddingStrategies)
    {
        $this->UpdateBiddingStrategies = $UpdateBiddingStrategies;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateBids()
    {
        return $this->UpdateBids;
    }

    /**
     * @param boolean $UpdateBids
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateBids($UpdateBids)
    {
        $this->UpdateBids = $UpdateBids;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCallAdExtensions()
    {
        return $this->UpdateCallAdExtensions;
    }

    /**
     * @param boolean $UpdateCallAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateCallAdExtensions($UpdateCallAdExtensions)
    {
        $this->UpdateCallAdExtensions = $UpdateCallAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCalloutAdExtensions()
    {
        return $this->UpdateCalloutAdExtensions;
    }

    /**
     * @param boolean $UpdateCalloutAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateCalloutAdExtensions($UpdateCalloutAdExtensions)
    {
        $this->UpdateCalloutAdExtensions = $UpdateCalloutAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCampaignAdGroupLanguages()
    {
        return $this->UpdateCampaignAdGroupLanguages;
    }

    /**
     * @param boolean $UpdateCampaignAdGroupLanguages
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateCampaignAdGroupLanguages($UpdateCampaignAdGroupLanguages)
    {
        $this->UpdateCampaignAdGroupLanguages = $UpdateCampaignAdGroupLanguages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCampaignBudgets()
    {
        return $this->UpdateCampaignBudgets;
    }

    /**
     * @param boolean $UpdateCampaignBudgets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateCampaignBudgets($UpdateCampaignBudgets)
    {
        $this->UpdateCampaignBudgets = $UpdateCampaignBudgets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCampaignNames()
    {
        return $this->UpdateCampaignNames;
    }

    /**
     * @param boolean $UpdateCampaignNames
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateCampaignNames($UpdateCampaignNames)
    {
        $this->UpdateCampaignNames = $UpdateCampaignNames;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateDemographicTargets()
    {
        return $this->UpdateDemographicTargets;
    }

    /**
     * @param boolean $UpdateDemographicTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateDemographicTargets($UpdateDemographicTargets)
    {
        $this->UpdateDemographicTargets = $UpdateDemographicTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateDeviceTargets()
    {
        return $this->UpdateDeviceTargets;
    }

    /**
     * @param boolean $UpdateDeviceTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateDeviceTargets($UpdateDeviceTargets)
    {
        $this->UpdateDeviceTargets = $UpdateDeviceTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateEntities()
    {
        return $this->UpdateEntities;
    }

    /**
     * @param boolean $UpdateEntities
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateEntities($UpdateEntities)
    {
        $this->UpdateEntities = $UpdateEntities;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateKeywordUrls()
    {
        return $this->UpdateKeywordUrls;
    }

    /**
     * @param boolean $UpdateKeywordUrls
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateKeywordUrls($UpdateKeywordUrls)
    {
        $this->UpdateKeywordUrls = $UpdateKeywordUrls;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateLabels()
    {
        return $this->UpdateLabels;
    }

    /**
     * @param boolean $UpdateLabels
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateLabels($UpdateLabels)
    {
        $this->UpdateLabels = $UpdateLabels;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateLocationAdExtensions()
    {
        return $this->UpdateLocationAdExtensions;
    }

    /**
     * @param boolean $UpdateLocationAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateLocationAdExtensions($UpdateLocationAdExtensions)
    {
        $this->UpdateLocationAdExtensions = $UpdateLocationAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateLocationTargets()
    {
        return $this->UpdateLocationTargets;
    }

    /**
     * @param boolean $UpdateLocationTargets
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateLocationTargets($UpdateLocationTargets)
    {
        $this->UpdateLocationTargets = $UpdateLocationTargets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateNegativeKeywordLists()
    {
        return $this->UpdateNegativeKeywordLists;
    }

    /**
     * @param boolean $UpdateNegativeKeywordLists
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateNegativeKeywordLists($UpdateNegativeKeywordLists)
    {
        $this->UpdateNegativeKeywordLists = $UpdateNegativeKeywordLists;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateNegativeSites()
    {
        return $this->UpdateNegativeSites;
    }

    /**
     * @param boolean $UpdateNegativeSites
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateNegativeSites($UpdateNegativeSites)
    {
        $this->UpdateNegativeSites = $UpdateNegativeSites;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdatePageFeeds()
    {
        return $this->UpdatePageFeeds;
    }

    /**
     * @param boolean $UpdatePageFeeds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdatePageFeeds($UpdatePageFeeds)
    {
        $this->UpdatePageFeeds = $UpdatePageFeeds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdatePriceAdExtensions()
    {
        return $this->UpdatePriceAdExtensions;
    }

    /**
     * @param boolean $UpdatePriceAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdatePriceAdExtensions($UpdatePriceAdExtensions)
    {
        $this->UpdatePriceAdExtensions = $UpdatePriceAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateProductFilters()
    {
        return $this->UpdateProductFilters;
    }

    /**
     * @param boolean $UpdateProductFilters
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateProductFilters($UpdateProductFilters)
    {
        $this->UpdateProductFilters = $UpdateProductFilters;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdatePromotionAdExtensions()
    {
        return $this->UpdatePromotionAdExtensions;
    }

    /**
     * @param boolean $UpdatePromotionAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdatePromotionAdExtensions($UpdatePromotionAdExtensions)
    {
        $this->UpdatePromotionAdExtensions = $UpdatePromotionAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateReviewAdExtensions()
    {
        return $this->UpdateReviewAdExtensions;
    }

    /**
     * @param boolean $UpdateReviewAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateReviewAdExtensions($UpdateReviewAdExtensions)
    {
        $this->UpdateReviewAdExtensions = $UpdateReviewAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateSitelinkAdExtensions()
    {
        return $this->UpdateSitelinkAdExtensions;
    }

    /**
     * @param boolean $UpdateSitelinkAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateSitelinkAdExtensions($UpdateSitelinkAdExtensions)
    {
        $this->UpdateSitelinkAdExtensions = $UpdateSitelinkAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateStatusForAdGroups()
    {
        return $this->UpdateStatusForAdGroups;
    }

    /**
     * @param boolean $UpdateStatusForAdGroups
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateStatusForAdGroups($UpdateStatusForAdGroups)
    {
        $this->UpdateStatusForAdGroups = $UpdateStatusForAdGroups;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateStatusForAds()
    {
        return $this->UpdateStatusForAds;
    }

    /**
     * @param boolean $UpdateStatusForAds
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateStatusForAds($UpdateStatusForAds)
    {
        $this->UpdateStatusForAds = $UpdateStatusForAds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateStatusForCampaigns()
    {
        return $this->UpdateStatusForCampaigns;
    }

    /**
     * @param boolean $UpdateStatusForCampaigns
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateStatusForCampaigns($UpdateStatusForCampaigns)
    {
        $this->UpdateStatusForCampaigns = $UpdateStatusForCampaigns;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateStatusForKeywords()
    {
        return $this->UpdateStatusForKeywords;
    }

    /**
     * @param boolean $UpdateStatusForKeywords
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateStatusForKeywords($UpdateStatusForKeywords)
    {
        $this->UpdateStatusForKeywords = $UpdateStatusForKeywords;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateStructuredSnippetAdExtensions()
    {
        return $this->UpdateStructuredSnippetAdExtensions;
    }

    /**
     * @param boolean $UpdateStructuredSnippetAdExtensions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateStructuredSnippetAdExtensions($UpdateStructuredSnippetAdExtensions)
    {
        $this->UpdateStructuredSnippetAdExtensions = $UpdateStructuredSnippetAdExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateUrlOptions()
    {
        return $this->UpdateUrlOptions;
    }

    /**
     * @param boolean $UpdateUrlOptions
     * @return \PMG\BingAds\CampaignManagement\GoogleImportOption
     */
    public function setUpdateUrlOptions($UpdateUrlOptions)
    {
        $this->UpdateUrlOptions = $UpdateUrlOptions;
        return $this;
    }

}
