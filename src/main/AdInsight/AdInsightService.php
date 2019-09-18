<?php

namespace PMG\BingAds\AdInsight;

class AdInsightService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'Microsoft.Advertiser.AdInsight.Api.Service.V13';
    const WSDL_PROD = 'https://adinsight.api.bingads.microsoft.com/Api/Advertiser/AdInsight/v13/AdInsightService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://adinsight.api.sandbox.bingads.microsoft.com/Api/Advertiser/AdInsight/v13/AdInsightService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetBidOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetBidOpportunitiesRequest',
      'GetBidOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetBidOpportunitiesResponse',
      'ArrayOfBidOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfBidOpportunity',
      'BidOpportunity' => 'PMG\\BingAds\\AdInsight\\BidOpportunity',
      'Opportunity' => 'PMG\\BingAds\\AdInsight\\Opportunity',
      'ArrayOfBatchError' => 'PMG\\BingAds\\AdInsight\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\AdInsight\\BatchError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\AdInsight\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\AdInsight\\OperationError',
      'GetBudgetOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetBudgetOpportunitiesRequest',
      'GetBudgetOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetBudgetOpportunitiesResponse',
      'ArrayOfBudgetOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfBudgetOpportunity',
      'BudgetOpportunity' => 'PMG\\BingAds\\AdInsight\\BudgetOpportunity',
      'ArrayOfBudgetPoint' => 'PMG\\BingAds\\AdInsight\\ArrayOfBudgetPoint',
      'BudgetPoint' => 'PMG\\BingAds\\AdInsight\\BudgetPoint',
      'GetKeywordOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordOpportunitiesRequest',
      'GetKeywordOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordOpportunitiesResponse',
      'ArrayOfKeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordOpportunity',
      'KeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\KeywordOpportunity',
      'BroadMatchKeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\BroadMatchKeywordOpportunity',
      'ArrayOfBroadMatchSearchQueryKPI' => 'PMG\\BingAds\\AdInsight\\ArrayOfBroadMatchSearchQueryKPI',
      'BroadMatchSearchQueryKPI' => 'PMG\\BingAds\\AdInsight\\BroadMatchSearchQueryKPI',
      'GetEstimatedBidByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordIdsRequest',
      'GetEstimatedBidByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordIdsResponse',
      'ArrayOfKeywordIdEstimatedBid' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdEstimatedBid',
      'KeywordIdEstimatedBid' => 'PMG\\BingAds\\AdInsight\\KeywordIdEstimatedBid',
      'KeywordEstimatedBid' => 'PMG\\BingAds\\AdInsight\\KeywordEstimatedBid',
      'ArrayOfEstimatedBidAndTraffic' => 'PMG\\BingAds\\AdInsight\\ArrayOfEstimatedBidAndTraffic',
      'EstimatedBidAndTraffic' => 'PMG\\BingAds\\AdInsight\\EstimatedBidAndTraffic',
      'GetEstimatedPositionByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordIdsRequest',
      'GetEstimatedPositionByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordIdsResponse',
      'ArrayOfKeywordIdEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdEstimatedPosition',
      'KeywordIdEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\KeywordIdEstimatedPosition',
      'KeywordEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\KeywordEstimatedPosition',
      'ArrayOfEstimatedPositionAndTraffic' => 'PMG\\BingAds\\AdInsight\\ArrayOfEstimatedPositionAndTraffic',
      'EstimatedPositionAndTraffic' => 'PMG\\BingAds\\AdInsight\\EstimatedPositionAndTraffic',
      'GetEstimatedBidByKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordsRequest',
      'ArrayOfKeywordAndMatchType' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordAndMatchType',
      'KeywordAndMatchType' => 'PMG\\BingAds\\AdInsight\\KeywordAndMatchType',
      'ArrayOfMatchType' => 'PMG\\BingAds\\AdInsight\\ArrayOfMatchType',
      'GetEstimatedBidByKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordsResponse',
      'ArrayOfKeywordEstimatedBid' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimatedBid',
      'GetEstimatedPositionByKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordsRequest',
      'GetEstimatedPositionByKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordsResponse',
      'ArrayOfKeywordEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimatedPosition',
      'GetBidLandscapeByAdGroupIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByAdGroupIdsRequest',
      'ArrayOfAdGroupBidLandscapeInput' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupBidLandscapeInput',
      'AdGroupBidLandscapeInput' => 'PMG\\BingAds\\AdInsight\\AdGroupBidLandscapeInput',
      'GetBidLandscapeByAdGroupIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByAdGroupIdsResponse',
      'ArrayOfAdGroupBidLandscape' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupBidLandscape',
      'AdGroupBidLandscape' => 'PMG\\BingAds\\AdInsight\\AdGroupBidLandscape',
      'DayMonthAndYear' => 'PMG\\BingAds\\AdInsight\\DayMonthAndYear',
      'ArrayOfBidLandscapePoint' => 'PMG\\BingAds\\AdInsight\\ArrayOfBidLandscapePoint',
      'BidLandscapePoint' => 'PMG\\BingAds\\AdInsight\\BidLandscapePoint',
      'GetBidLandscapeByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByKeywordIdsRequest',
      'GetBidLandscapeByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByKeywordIdsResponse',
      'ArrayOfKeywordBidLandscape' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordBidLandscape',
      'KeywordBidLandscape' => 'PMG\\BingAds\\AdInsight\\KeywordBidLandscape',
      'GetHistoricalKeywordPerformanceRequest' => 'PMG\\BingAds\\AdInsight\\GetHistoricalKeywordPerformanceRequest',
      'GetHistoricalKeywordPerformanceResponse' => 'PMG\\BingAds\\AdInsight\\GetHistoricalKeywordPerformanceResponse',
      'ArrayOfKeywordHistoricalPerformance' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordHistoricalPerformance',
      'KeywordHistoricalPerformance' => 'PMG\\BingAds\\AdInsight\\KeywordHistoricalPerformance',
      'ArrayOfKeywordKPI' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordKPI',
      'KeywordKPI' => 'PMG\\BingAds\\AdInsight\\KeywordKPI',
      'GetHistoricalSearchCountRequest' => 'PMG\\BingAds\\AdInsight\\GetHistoricalSearchCountRequest',
      'GetHistoricalSearchCountResponse' => 'PMG\\BingAds\\AdInsight\\GetHistoricalSearchCountResponse',
      'ArrayOfKeywordSearchCount' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordSearchCount',
      'KeywordSearchCount' => 'PMG\\BingAds\\AdInsight\\KeywordSearchCount',
      'ArrayOfSearchCountsByAttributes' => 'PMG\\BingAds\\AdInsight\\ArrayOfSearchCountsByAttributes',
      'SearchCountsByAttributes' => 'PMG\\BingAds\\AdInsight\\SearchCountsByAttributes',
      'ArrayOfHistoricalSearchCountPeriodic' => 'PMG\\BingAds\\AdInsight\\ArrayOfHistoricalSearchCountPeriodic',
      'HistoricalSearchCountPeriodic' => 'PMG\\BingAds\\AdInsight\\HistoricalSearchCountPeriodic',
      'GetKeywordCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordCategoriesRequest',
      'GetKeywordCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordCategoriesResponse',
      'ArrayOfKeywordCategoryResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordCategoryResult',
      'KeywordCategoryResult' => 'PMG\\BingAds\\AdInsight\\KeywordCategoryResult',
      'ArrayOfKeywordCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordCategory',
      'KeywordCategory' => 'PMG\\BingAds\\AdInsight\\KeywordCategory',
      'GetKeywordDemographicsRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordDemographicsRequest',
      'GetKeywordDemographicsResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordDemographicsResponse',
      'ArrayOfKeywordDemographicResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordDemographicResult',
      'KeywordDemographicResult' => 'PMG\\BingAds\\AdInsight\\KeywordDemographicResult',
      'ArrayOfKeywordDemographic' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordDemographic',
      'KeywordDemographic' => 'PMG\\BingAds\\AdInsight\\KeywordDemographic',
      'GetKeywordLocationsRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordLocationsRequest',
      'GetKeywordLocationsResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordLocationsResponse',
      'ArrayOfKeywordLocationResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordLocationResult',
      'KeywordLocationResult' => 'PMG\\BingAds\\AdInsight\\KeywordLocationResult',
      'ArrayOfKeywordLocation' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordLocation',
      'KeywordLocation' => 'PMG\\BingAds\\AdInsight\\KeywordLocation',
      'SuggestKeywordsForUrlRequest' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsForUrlRequest',
      'SuggestKeywordsForUrlResponse' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsForUrlResponse',
      'ArrayOfKeywordAndConfidence' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordAndConfidence',
      'KeywordAndConfidence' => 'PMG\\BingAds\\AdInsight\\KeywordAndConfidence',
      'SuggestKeywordsFromExistingKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsFromExistingKeywordsRequest',
      'SuggestKeywordsFromExistingKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsFromExistingKeywordsResponse',
      'ArrayOfKeywordSuggestion' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordSuggestion',
      'KeywordSuggestion' => 'PMG\\BingAds\\AdInsight\\KeywordSuggestion',
      'GetAuctionInsightDataRequest' => 'PMG\\BingAds\\AdInsight\\GetAuctionInsightDataRequest',
      'ArrayOfSearchParameter' => 'PMG\\BingAds\\AdInsight\\ArrayOfSearchParameter',
      'SearchParameter' => 'PMG\\BingAds\\AdInsight\\SearchParameter',
      'QuerySearchParameter' => 'PMG\\BingAds\\AdInsight\\QuerySearchParameter',
      'UrlSearchParameter' => 'PMG\\BingAds\\AdInsight\\UrlSearchParameter',
      'CategorySearchParameter' => 'PMG\\BingAds\\AdInsight\\CategorySearchParameter',
      'SearchVolumeSearchParameter' => 'PMG\\BingAds\\AdInsight\\SearchVolumeSearchParameter',
      'SuggestedBidSearchParameter' => 'PMG\\BingAds\\AdInsight\\SuggestedBidSearchParameter',
      'IdeaTextSearchParameter' => 'PMG\\BingAds\\AdInsight\\IdeaTextSearchParameter',
      'ArrayOfKeyword' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeyword',
      'Keyword' => 'PMG\\BingAds\\AdInsight\\Keyword',
      'ExcludeAccountKeywordsSearchParameter' => 'PMG\\BingAds\\AdInsight\\ExcludeAccountKeywordsSearchParameter',
      'ImpressionShareSearchParameter' => 'PMG\\BingAds\\AdInsight\\ImpressionShareSearchParameter',
      'LocationSearchParameter' => 'PMG\\BingAds\\AdInsight\\LocationSearchParameter',
      'ArrayOfLocationCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfLocationCriterion',
      'LocationCriterion' => 'PMG\\BingAds\\AdInsight\\LocationCriterion',
      'Criterion' => 'PMG\\BingAds\\AdInsight\\Criterion',
      'LanguageCriterion' => 'PMG\\BingAds\\AdInsight\\LanguageCriterion',
      'NetworkCriterion' => 'PMG\\BingAds\\AdInsight\\NetworkCriterion',
      'DeviceCriterion' => 'PMG\\BingAds\\AdInsight\\DeviceCriterion',
      'NetworkSearchParameter' => 'PMG\\BingAds\\AdInsight\\NetworkSearchParameter',
      'DeviceSearchParameter' => 'PMG\\BingAds\\AdInsight\\DeviceSearchParameter',
      'LanguageSearchParameter' => 'PMG\\BingAds\\AdInsight\\LanguageSearchParameter',
      'ArrayOfLanguageCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfLanguageCriterion',
      'CompetitionSearchParameter' => 'PMG\\BingAds\\AdInsight\\CompetitionSearchParameter',
      'ArrayOfCompetitionLevel' => 'PMG\\BingAds\\AdInsight\\ArrayOfCompetitionLevel',
      'DateRangeSearchParameter' => 'PMG\\BingAds\\AdInsight\\DateRangeSearchParameter',
      'AuctionSegmentSearchParameter' => 'PMG\\BingAds\\AdInsight\\AuctionSegmentSearchParameter',
      'GetAuctionInsightDataResponse' => 'PMG\\BingAds\\AdInsight\\GetAuctionInsightDataResponse',
      'AuctionInsightResult' => 'PMG\\BingAds\\AdInsight\\AuctionInsightResult',
      'ArrayOfAuctionSegment' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionSegment',
      'ArrayOfAuctionInsightEntry' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionInsightEntry',
      'AuctionInsightEntry' => 'PMG\\BingAds\\AdInsight\\AuctionInsightEntry',
      'AuctionInsightKpi' => 'PMG\\BingAds\\AdInsight\\AuctionInsightKpi',
      'ArrayOfAuctionInsightKpi' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionInsightKpi',
      'GetDomainCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetDomainCategoriesRequest',
      'GetDomainCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetDomainCategoriesResponse',
      'ArrayOfDomainCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfDomainCategory',
      'DomainCategory' => 'PMG\\BingAds\\AdInsight\\DomainCategory',
      'PutMetricDataRequest' => 'PMG\\BingAds\\AdInsight\\PutMetricDataRequest',
      'ArrayOfMetricData' => 'PMG\\BingAds\\AdInsight\\ArrayOfMetricData',
      'MetricData' => 'PMG\\BingAds\\AdInsight\\MetricData',
      'PutMetricDataResponse' => 'PMG\\BingAds\\AdInsight\\PutMetricDataResponse',
      'GetKeywordIdeaCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeaCategoriesRequest',
      'GetKeywordIdeaCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeaCategoriesResponse',
      'ArrayOfKeywordIdeaCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdeaCategory',
      'KeywordIdeaCategory' => 'PMG\\BingAds\\AdInsight\\KeywordIdeaCategory',
      'GetKeywordIdeasRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeasRequest',
      'ArrayOfKeywordIdeaAttribute' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdeaAttribute',
      'GetKeywordIdeasResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeasResponse',
      'ArrayOfKeywordIdea' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdea',
      'KeywordIdea' => 'PMG\\BingAds\\AdInsight\\KeywordIdea',
      'GetKeywordTrafficEstimatesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordTrafficEstimatesRequest',
      'ArrayOfCampaignEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfCampaignEstimator',
      'CampaignEstimator' => 'PMG\\BingAds\\AdInsight\\CampaignEstimator',
      'ArrayOfAdGroupEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupEstimator',
      'AdGroupEstimator' => 'PMG\\BingAds\\AdInsight\\AdGroupEstimator',
      'ArrayOfKeywordEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimator',
      'KeywordEstimator' => 'PMG\\BingAds\\AdInsight\\KeywordEstimator',
      'ArrayOfCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfCriterion',
      'ArrayOfNegativeKeyword' => 'PMG\\BingAds\\AdInsight\\ArrayOfNegativeKeyword',
      'NegativeKeyword' => 'PMG\\BingAds\\AdInsight\\NegativeKeyword',
      'GetKeywordTrafficEstimatesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordTrafficEstimatesResponse',
      'ArrayOfCampaignEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfCampaignEstimate',
      'CampaignEstimate' => 'PMG\\BingAds\\AdInsight\\CampaignEstimate',
      'ArrayOfAdGroupEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupEstimate',
      'AdGroupEstimate' => 'PMG\\BingAds\\AdInsight\\AdGroupEstimate',
      'ArrayOfKeywordEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimate',
      'KeywordEstimate' => 'PMG\\BingAds\\AdInsight\\KeywordEstimate',
      'TrafficEstimate' => 'PMG\\BingAds\\AdInsight\\TrafficEstimate',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\AdInsight\\AdApiError',
      'ArrayOflong' => 'PMG\\BingAds\\AdInsight\\ArrayOflong',
      'ArrayOfstring' => 'PMG\\BingAds\\AdInsight\\ArrayOfstring',
      'ApplicationFault' => 'PMG\\BingAds\\AdInsight\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\AdInsight\\ApiFault',
      'ApiFaultDetail' => 'PMG\\BingAds\\AdInsight\\ApiFault',
      'AdApiFault' => 'PMG\\BingAds\\AdInsight\\AdApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\AdInsight\\AdApiFault',
    );

    /**
     * @param PMG\BingAds\BingSession $session A session object with credentials, etc
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param PMG\BingAds\ServiceDescriptor $sd The services descriptor for the service
     */
    public function __construct(\PMG\BingAds\BingSession $session, string $wsdl, array $options=array(), \PMG\BingAds\ServiceDescriptor $sd=null)
    {
    $options["classmap"] = array_replace(self::$classmap, $options["classmap"] ?? []);
    parent::__construct($session, $wsdl, $options, $sd);
    }

    /**
     * @param GetBidOpportunitiesRequest $parameters
     * @return GetBidOpportunitiesResponse
     */
    public function getBidOpportunities(GetBidOpportunitiesRequest $parameters)
    {
        return $this->__soapCall("GetBidOpportunities", [$parameters]);
    }

    /**
     * @param GetBudgetOpportunitiesRequest $parameters
     * @return GetBudgetOpportunitiesResponse
     */
    public function getBudgetOpportunities(GetBudgetOpportunitiesRequest $parameters)
    {
        return $this->__soapCall("GetBudgetOpportunities", [$parameters]);
    }

    /**
     * @param GetKeywordOpportunitiesRequest $parameters
     * @return GetKeywordOpportunitiesResponse
     */
    public function getKeywordOpportunities(GetKeywordOpportunitiesRequest $parameters)
    {
        return $this->__soapCall("GetKeywordOpportunities", [$parameters]);
    }

    /**
     * @param GetEstimatedBidByKeywordIdsRequest $parameters
     * @return GetEstimatedBidByKeywordIdsResponse
     */
    public function getEstimatedBidByKeywordIds(GetEstimatedBidByKeywordIdsRequest $parameters)
    {
        return $this->__soapCall("GetEstimatedBidByKeywordIds", [$parameters]);
    }

    /**
     * @param GetEstimatedPositionByKeywordIdsRequest $parameters
     * @return GetEstimatedPositionByKeywordIdsResponse
     */
    public function getEstimatedPositionByKeywordIds(GetEstimatedPositionByKeywordIdsRequest $parameters)
    {
        return $this->__soapCall("GetEstimatedPositionByKeywordIds", [$parameters]);
    }

    /**
     * @param GetEstimatedBidByKeywordsRequest $parameters
     * @return GetEstimatedBidByKeywordsResponse
     */
    public function getEstimatedBidByKeywords(GetEstimatedBidByKeywordsRequest $parameters)
    {
        return $this->__soapCall("GetEstimatedBidByKeywords", [$parameters]);
    }

    /**
     * @param GetEstimatedPositionByKeywordsRequest $parameters
     * @return GetEstimatedPositionByKeywordsResponse
     */
    public function getEstimatedPositionByKeywords(GetEstimatedPositionByKeywordsRequest $parameters)
    {
        return $this->__soapCall("GetEstimatedPositionByKeywords", [$parameters]);
    }

    /**
     * @param GetBidLandscapeByAdGroupIdsRequest $parameters
     * @return GetBidLandscapeByAdGroupIdsResponse
     */
    public function getBidLandscapeByAdGroupIds(GetBidLandscapeByAdGroupIdsRequest $parameters)
    {
        return $this->__soapCall("GetBidLandscapeByAdGroupIds", [$parameters]);
    }

    /**
     * @param GetBidLandscapeByKeywordIdsRequest $parameters
     * @return GetBidLandscapeByKeywordIdsResponse
     */
    public function getBidLandscapeByKeywordIds(GetBidLandscapeByKeywordIdsRequest $parameters)
    {
        return $this->__soapCall("GetBidLandscapeByKeywordIds", [$parameters]);
    }

    /**
     * @param GetHistoricalKeywordPerformanceRequest $parameters
     * @return GetHistoricalKeywordPerformanceResponse
     */
    public function getHistoricalKeywordPerformance(GetHistoricalKeywordPerformanceRequest $parameters)
    {
        return $this->__soapCall("GetHistoricalKeywordPerformance", [$parameters]);
    }

    /**
     * @param GetHistoricalSearchCountRequest $parameters
     * @return GetHistoricalSearchCountResponse
     */
    public function getHistoricalSearchCount(GetHistoricalSearchCountRequest $parameters)
    {
        return $this->__soapCall("GetHistoricalSearchCount", [$parameters]);
    }

    /**
     * @param GetKeywordCategoriesRequest $parameters
     * @return GetKeywordCategoriesResponse
     */
    public function getKeywordCategories(GetKeywordCategoriesRequest $parameters)
    {
        return $this->__soapCall("GetKeywordCategories", [$parameters]);
    }

    /**
     * @param GetKeywordDemographicsRequest $parameters
     * @return GetKeywordDemographicsResponse
     */
    public function getKeywordDemographics(GetKeywordDemographicsRequest $parameters)
    {
        return $this->__soapCall("GetKeywordDemographics", [$parameters]);
    }

    /**
     * @param GetKeywordLocationsRequest $parameters
     * @return GetKeywordLocationsResponse
     */
    public function getKeywordLocations(GetKeywordLocationsRequest $parameters)
    {
        return $this->__soapCall("GetKeywordLocations", [$parameters]);
    }

    /**
     * @param SuggestKeywordsForUrlRequest $parameters
     * @return SuggestKeywordsForUrlResponse
     */
    public function suggestKeywordsForUrl(SuggestKeywordsForUrlRequest $parameters)
    {
        return $this->__soapCall("SuggestKeywordsForUrl", [$parameters]);
    }

    /**
     * @param SuggestKeywordsFromExistingKeywordsRequest $parameters
     * @return SuggestKeywordsFromExistingKeywordsResponse
     */
    public function suggestKeywordsFromExistingKeywords(SuggestKeywordsFromExistingKeywordsRequest $parameters)
    {
        return $this->__soapCall("SuggestKeywordsFromExistingKeywords", [$parameters]);
    }

    /**
     * @param GetAuctionInsightDataRequest $parameters
     * @return GetAuctionInsightDataResponse
     */
    public function getAuctionInsightData(GetAuctionInsightDataRequest $parameters)
    {
        return $this->__soapCall("GetAuctionInsightData", [$parameters]);
    }

    /**
     * @param GetDomainCategoriesRequest $parameters
     * @return GetDomainCategoriesResponse
     */
    public function getDomainCategories(GetDomainCategoriesRequest $parameters)
    {
        return $this->__soapCall("GetDomainCategories", [$parameters]);
    }

    /**
     * @param PutMetricDataRequest $parameters
     * @return PutMetricDataResponse
     */
    public function putMetricData(PutMetricDataRequest $parameters)
    {
        return $this->__soapCall("PutMetricData", [$parameters]);
    }

    /**
     * @param GetKeywordIdeaCategoriesRequest $parameters
     * @return GetKeywordIdeaCategoriesResponse
     */
    public function getKeywordIdeaCategories(GetKeywordIdeaCategoriesRequest $parameters)
    {
        return $this->__soapCall("GetKeywordIdeaCategories", [$parameters]);
    }

    /**
     * @param GetKeywordIdeasRequest $parameters
     * @return GetKeywordIdeasResponse
     */
    public function getKeywordIdeas(GetKeywordIdeasRequest $parameters)
    {
        return $this->__soapCall("GetKeywordIdeas", [$parameters]);
    }

    /**
     * @param GetKeywordTrafficEstimatesRequest $parameters
     * @return GetKeywordTrafficEstimatesResponse
     */
    public function getKeywordTrafficEstimates(GetKeywordTrafficEstimatesRequest $parameters)
    {
        return $this->__soapCall("GetKeywordTrafficEstimates", [$parameters]);
    }

}
