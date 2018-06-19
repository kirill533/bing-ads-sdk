<?php

namespace PMG\BingAds\AdInsight;

class AdInsightService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'Microsoft.Advertiser.AdInsight.Api.Service.V12';
    const WSDL_PROD = 'https://adinsight.api.bingads.microsoft.com/Api/Advertiser/AdInsight/v12/AdInsightService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://adinsight.api.sandbox.bingads.microsoft.com/Api/Advertiser/AdInsight/v12/AdInsightService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetBidOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetBidOpportunitiesRequest',
      'GetBidOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetBidOpportunitiesResponse',
      'ApiFaultDetail' => 'PMG\\BingAds\\AdInsight\\ApiFaultDetail',
      'GetBudgetOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetBudgetOpportunitiesRequest',
      'GetBudgetOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetBudgetOpportunitiesResponse',
      'GetKeywordOpportunitiesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordOpportunitiesRequest',
      'GetKeywordOpportunitiesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordOpportunitiesResponse',
      'GetEstimatedBidByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordIdsRequest',
      'GetEstimatedBidByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordIdsResponse',
      'GetEstimatedPositionByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordIdsRequest',
      'GetEstimatedPositionByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordIdsResponse',
      'GetEstimatedBidByKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordsRequest',
      'GetEstimatedBidByKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedBidByKeywordsResponse',
      'GetEstimatedPositionByKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordsRequest',
      'GetEstimatedPositionByKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\GetEstimatedPositionByKeywordsResponse',
      'GetBidLandscapeByAdGroupIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByAdGroupIdsRequest',
      'GetBidLandscapeByAdGroupIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByAdGroupIdsResponse',
      'GetBidLandscapeByKeywordIdsRequest' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByKeywordIdsRequest',
      'GetBidLandscapeByKeywordIdsResponse' => 'PMG\\BingAds\\AdInsight\\GetBidLandscapeByKeywordIdsResponse',
      'GetHistoricalKeywordPerformanceRequest' => 'PMG\\BingAds\\AdInsight\\GetHistoricalKeywordPerformanceRequest',
      'GetHistoricalKeywordPerformanceResponse' => 'PMG\\BingAds\\AdInsight\\GetHistoricalKeywordPerformanceResponse',
      'GetHistoricalSearchCountRequest' => 'PMG\\BingAds\\AdInsight\\GetHistoricalSearchCountRequest',
      'GetHistoricalSearchCountResponse' => 'PMG\\BingAds\\AdInsight\\GetHistoricalSearchCountResponse',
      'GetKeywordCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordCategoriesRequest',
      'GetKeywordCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordCategoriesResponse',
      'GetKeywordDemographicsRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordDemographicsRequest',
      'GetKeywordDemographicsResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordDemographicsResponse',
      'GetKeywordLocationsRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordLocationsRequest',
      'GetKeywordLocationsResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordLocationsResponse',
      'SuggestKeywordsForUrlRequest' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsForUrlRequest',
      'SuggestKeywordsForUrlResponse' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsForUrlResponse',
      'SuggestKeywordsFromExistingKeywordsRequest' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsFromExistingKeywordsRequest',
      'SuggestKeywordsFromExistingKeywordsResponse' => 'PMG\\BingAds\\AdInsight\\SuggestKeywordsFromExistingKeywordsResponse',
      'GetAuctionInsightDataRequest' => 'PMG\\BingAds\\AdInsight\\GetAuctionInsightDataRequest',
      'GetAuctionInsightDataResponse' => 'PMG\\BingAds\\AdInsight\\GetAuctionInsightDataResponse',
      'GetDomainCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetDomainCategoriesRequest',
      'GetDomainCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetDomainCategoriesResponse',
      'PutMetricDataRequest' => 'PMG\\BingAds\\AdInsight\\PutMetricDataRequest',
      'PutMetricDataResponse' => 'PMG\\BingAds\\AdInsight\\PutMetricDataResponse',
      'GetKeywordIdeaCategoriesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeaCategoriesRequest',
      'GetKeywordIdeaCategoriesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeaCategoriesResponse',
      'GetKeywordIdeasRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeasRequest',
      'GetKeywordIdeasResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordIdeasResponse',
      'GetKeywordTrafficEstimatesRequest' => 'PMG\\BingAds\\AdInsight\\GetKeywordTrafficEstimatesRequest',
      'GetKeywordTrafficEstimatesResponse' => 'PMG\\BingAds\\AdInsight\\GetKeywordTrafficEstimatesResponse',
      'ArrayOfBidOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfBidOpportunity',
      'BidOpportunity' => 'PMG\\BingAds\\AdInsight\\BidOpportunity',
      'Opportunity' => 'PMG\\BingAds\\AdInsight\\Opportunity',
      'ArrayOfBudgetOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfBudgetOpportunity',
      'BudgetOpportunity' => 'PMG\\BingAds\\AdInsight\\BudgetOpportunity',
      'ArrayOfBudgetPoint' => 'PMG\\BingAds\\AdInsight\\ArrayOfBudgetPoint',
      'BudgetPoint' => 'PMG\\BingAds\\AdInsight\\BudgetPoint',
      'ArrayOfKeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordOpportunity',
      'KeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\KeywordOpportunity',
      'BroadMatchKeywordOpportunity' => 'PMG\\BingAds\\AdInsight\\BroadMatchKeywordOpportunity',
      'ArrayOfBroadMatchSearchQueryKPI' => 'PMG\\BingAds\\AdInsight\\ArrayOfBroadMatchSearchQueryKPI',
      'BroadMatchSearchQueryKPI' => 'PMG\\BingAds\\AdInsight\\BroadMatchSearchQueryKPI',
      'ArrayOfKeywordIdEstimatedBid' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdEstimatedBid',
      'KeywordIdEstimatedBid' => 'PMG\\BingAds\\AdInsight\\KeywordIdEstimatedBid',
      'KeywordEstimatedBid' => 'PMG\\BingAds\\AdInsight\\KeywordEstimatedBid',
      'ArrayOfEstimatedBidAndTraffic' => 'PMG\\BingAds\\AdInsight\\ArrayOfEstimatedBidAndTraffic',
      'EstimatedBidAndTraffic' => 'PMG\\BingAds\\AdInsight\\EstimatedBidAndTraffic',
      'ArrayOfKeywordIdEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdEstimatedPosition',
      'KeywordIdEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\KeywordIdEstimatedPosition',
      'KeywordEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\KeywordEstimatedPosition',
      'ArrayOfEstimatedPositionAndTraffic' => 'PMG\\BingAds\\AdInsight\\ArrayOfEstimatedPositionAndTraffic',
      'EstimatedPositionAndTraffic' => 'PMG\\BingAds\\AdInsight\\EstimatedPositionAndTraffic',
      'ArrayOfMatchType' => 'PMG\\BingAds\\AdInsight\\ArrayOfMatchType',
      'ArrayOfKeywordEstimatedBid' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimatedBid',
      'ArrayOfKeywordEstimatedPosition' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimatedPosition',
      'ArrayOfAdGroupBidLandscapeInput' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupBidLandscapeInput',
      'AdGroupBidLandscapeInput' => 'PMG\\BingAds\\AdInsight\\AdGroupBidLandscapeInput',
      'ArrayOfAdGroupBidLandscape' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupBidLandscape',
      'AdGroupBidLandscape' => 'PMG\\BingAds\\AdInsight\\AdGroupBidLandscape',
      'DayMonthAndYear' => 'PMG\\BingAds\\AdInsight\\DayMonthAndYear',
      'ArrayOfBidLandscapePoint' => 'PMG\\BingAds\\AdInsight\\ArrayOfBidLandscapePoint',
      'BidLandscapePoint' => 'PMG\\BingAds\\AdInsight\\BidLandscapePoint',
      'ArrayOfKeywordBidLandscape' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordBidLandscape',
      'KeywordBidLandscape' => 'PMG\\BingAds\\AdInsight\\KeywordBidLandscape',
      'ArrayOfKeywordHistoricalPerformance' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordHistoricalPerformance',
      'KeywordHistoricalPerformance' => 'PMG\\BingAds\\AdInsight\\KeywordHistoricalPerformance',
      'ArrayOfKeywordKPI' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordKPI',
      'KeywordKPI' => 'PMG\\BingAds\\AdInsight\\KeywordKPI',
      'ArrayOfKeywordSearchCount' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordSearchCount',
      'KeywordSearchCount' => 'PMG\\BingAds\\AdInsight\\KeywordSearchCount',
      'ArrayOfSearchCountsByAttributes' => 'PMG\\BingAds\\AdInsight\\ArrayOfSearchCountsByAttributes',
      'SearchCountsByAttributes' => 'PMG\\BingAds\\AdInsight\\SearchCountsByAttributes',
      'ArrayOfHistoricalSearchCountPeriodic' => 'PMG\\BingAds\\AdInsight\\ArrayOfHistoricalSearchCountPeriodic',
      'HistoricalSearchCountPeriodic' => 'PMG\\BingAds\\AdInsight\\HistoricalSearchCountPeriodic',
      'ArrayOfKeywordCategoryResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordCategoryResult',
      'KeywordCategoryResult' => 'PMG\\BingAds\\AdInsight\\KeywordCategoryResult',
      'ArrayOfKeywordCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordCategory',
      'KeywordCategory' => 'PMG\\BingAds\\AdInsight\\KeywordCategory',
      'ArrayOfKeywordDemographicResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordDemographicResult',
      'KeywordDemographicResult' => 'PMG\\BingAds\\AdInsight\\KeywordDemographicResult',
      'ArrayOfKeywordDemographic' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordDemographic',
      'KeywordDemographic' => 'PMG\\BingAds\\AdInsight\\KeywordDemographic',
      'ArrayOfKeywordLocationResult' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordLocationResult',
      'KeywordLocationResult' => 'PMG\\BingAds\\AdInsight\\KeywordLocationResult',
      'ArrayOfKeywordLocation' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordLocation',
      'KeywordLocation' => 'PMG\\BingAds\\AdInsight\\KeywordLocation',
      'ArrayOfKeywordAndConfidence' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordAndConfidence',
      'KeywordAndConfidence' => 'PMG\\BingAds\\AdInsight\\KeywordAndConfidence',
      'ArrayOfKeywordSuggestion' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordSuggestion',
      'KeywordSuggestion' => 'PMG\\BingAds\\AdInsight\\KeywordSuggestion',
      'AuctionInsightResult' => 'PMG\\BingAds\\AdInsight\\AuctionInsightResult',
      'ArrayOfAuctionSegment' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionSegment',
      'ArrayOfAuctionInsightEntry' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionInsightEntry',
      'AuctionInsightEntry' => 'PMG\\BingAds\\AdInsight\\AuctionInsightEntry',
      'AuctionInsightKpi' => 'PMG\\BingAds\\AdInsight\\AuctionInsightKpi',
      'ArrayOfAuctionInsightKpi' => 'PMG\\BingAds\\AdInsight\\ArrayOfAuctionInsightKpi',
      'ArrayOfDomainCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfDomainCategory',
      'DomainCategory' => 'PMG\\BingAds\\AdInsight\\DomainCategory',
      'ArrayOfMetricData' => 'PMG\\BingAds\\AdInsight\\ArrayOfMetricData',
      'MetricData' => 'PMG\\BingAds\\AdInsight\\MetricData',
      'ArrayOfKeywordIdeaCategory' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdeaCategory',
      'KeywordIdeaCategory' => 'PMG\\BingAds\\AdInsight\\KeywordIdeaCategory',
      'ArrayOfKeywordIdea' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdea',
      'KeywordIdea' => 'PMG\\BingAds\\AdInsight\\KeywordIdea',
      'ArrayOfCampaignEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfCampaignEstimator',
      'CampaignEstimator' => 'PMG\\BingAds\\AdInsight\\CampaignEstimator',
      'ArrayOfAdGroupEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupEstimator',
      'AdGroupEstimator' => 'PMG\\BingAds\\AdInsight\\AdGroupEstimator',
      'ArrayOfKeywordEstimator' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimator',
      'KeywordEstimator' => 'PMG\\BingAds\\AdInsight\\KeywordEstimator',
      'ArrayOfCampaignEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfCampaignEstimate',
      'CampaignEstimate' => 'PMG\\BingAds\\AdInsight\\CampaignEstimate',
      'ArrayOfAdGroupEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdGroupEstimate',
      'AdGroupEstimate' => 'PMG\\BingAds\\AdInsight\\AdGroupEstimate',
      'ArrayOfKeywordEstimate' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordEstimate',
      'KeywordEstimate' => 'PMG\\BingAds\\AdInsight\\KeywordEstimate',
      'TrafficEstimate' => 'PMG\\BingAds\\AdInsight\\TrafficEstimate',
      'AdApiFaultDetail' => 'PMG\\BingAds\\AdInsight\\AdApiFaultDetail',
      'ApplicationFault' => 'PMG\\BingAds\\AdInsight\\ApplicationFault',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\AdInsight\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\AdInsight\\AdApiError',
      'ArrayOfBatchError' => 'PMG\\BingAds\\AdInsight\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\AdInsight\\BatchError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\AdInsight\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\AdInsight\\OperationError',
      'ArrayOflong' => 'PMG\\BingAds\\AdInsight\\ArrayOflong',
      'ArrayOfstring' => 'PMG\\BingAds\\AdInsight\\ArrayOfstring',
      'ArrayOfKeywordAndMatchType' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordAndMatchType',
      'KeywordAndMatchType' => 'PMG\\BingAds\\AdInsight\\KeywordAndMatchType',
      'ArrayOfSearchParameter' => 'PMG\\BingAds\\AdInsight\\ArrayOfSearchParameter',
      'SearchParameter' => 'PMG\\BingAds\\AdInsight\\SearchParameter',
      'QuerySearchParameter' => 'PMG\\BingAds\\AdInsight\\QuerySearchParameter',
      'UrlSearchParameter' => 'PMG\\BingAds\\AdInsight\\UrlSearchParameter',
      'CategorySearchParameter' => 'PMG\\BingAds\\AdInsight\\CategorySearchParameter',
      'SearchVolumeSearchParameter' => 'PMG\\BingAds\\AdInsight\\SearchVolumeSearchParameter',
      'SuggestedBidSearchParameter' => 'PMG\\BingAds\\AdInsight\\SuggestedBidSearchParameter',
      'IdeaTextSearchParameter' => 'PMG\\BingAds\\AdInsight\\IdeaTextSearchParameter',
      'ExcludeAccountKeywordsSearchParameter' => 'PMG\\BingAds\\AdInsight\\ExcludeAccountKeywordsSearchParameter',
      'ImpressionShareSearchParameter' => 'PMG\\BingAds\\AdInsight\\ImpressionShareSearchParameter',
      'LocationSearchParameter' => 'PMG\\BingAds\\AdInsight\\LocationSearchParameter',
      'NetworkSearchParameter' => 'PMG\\BingAds\\AdInsight\\NetworkSearchParameter',
      'DeviceSearchParameter' => 'PMG\\BingAds\\AdInsight\\DeviceSearchParameter',
      'LanguageSearchParameter' => 'PMG\\BingAds\\AdInsight\\LanguageSearchParameter',
      'CompetitionSearchParameter' => 'PMG\\BingAds\\AdInsight\\CompetitionSearchParameter',
      'DateRangeSearchParameter' => 'PMG\\BingAds\\AdInsight\\DateRangeSearchParameter',
      'AuctionSegmentSearchParameter' => 'PMG\\BingAds\\AdInsight\\AuctionSegmentSearchParameter',
      'ArrayOfKeyword' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeyword',
      'Keyword' => 'PMG\\BingAds\\AdInsight\\Keyword',
      'ArrayOfCompetitionLevel' => 'PMG\\BingAds\\AdInsight\\ArrayOfCompetitionLevel',
      'ArrayOfKeywordIdeaAttribute' => 'PMG\\BingAds\\AdInsight\\ArrayOfKeywordIdeaAttribute',
      'ArrayOfNegativeKeyword' => 'PMG\\BingAds\\AdInsight\\ArrayOfNegativeKeyword',
      'NegativeKeyword' => 'PMG\\BingAds\\AdInsight\\NegativeKeyword',
      'ArrayOfLocationCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfLocationCriterion',
      'LocationCriterion' => 'PMG\\BingAds\\AdInsight\\LocationCriterion',
      'Criterion' => 'PMG\\BingAds\\AdInsight\\Criterion',
      'LanguageCriterion' => 'PMG\\BingAds\\AdInsight\\LanguageCriterion',
      'NetworkCriterion' => 'PMG\\BingAds\\AdInsight\\NetworkCriterion',
      'DeviceCriterion' => 'PMG\\BingAds\\AdInsight\\DeviceCriterion',
      'ArrayOfLanguageCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfLanguageCriterion',
      'ArrayOfCriterion' => 'PMG\\BingAds\\AdInsight\\ArrayOfCriterion',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(string $wsdl, array $options=array())
    {
    $options["classmap"] = array_replace(self::$classmap, isset($options["classmap"]) ? $options["classmap"] : []);
    parent::__construct($wsdl, $options);
    }

    /**
     * @param GetBidOpportunitiesRequest $parameters
     * @return GetBidOpportunitiesResponse
     */
    public function GetBidOpportunities(GetBidOpportunitiesRequest $parameters)
    {
      return $this->__soapCall("GetBidOpportunities", array($parameters));
    }

    /**
     * @param GetBudgetOpportunitiesRequest $parameters
     * @return GetBudgetOpportunitiesResponse
     */
    public function GetBudgetOpportunities(GetBudgetOpportunitiesRequest $parameters)
    {
      return $this->__soapCall("GetBudgetOpportunities", array($parameters));
    }

    /**
     * @param GetKeywordOpportunitiesRequest $parameters
     * @return GetKeywordOpportunitiesResponse
     */
    public function GetKeywordOpportunities(GetKeywordOpportunitiesRequest $parameters)
    {
      return $this->__soapCall("GetKeywordOpportunities", array($parameters));
    }

    /**
     * @param GetEstimatedBidByKeywordIdsRequest $parameters
     * @return GetEstimatedBidByKeywordIdsResponse
     */
    public function GetEstimatedBidByKeywordIds(GetEstimatedBidByKeywordIdsRequest $parameters)
    {
      return $this->__soapCall("GetEstimatedBidByKeywordIds", array($parameters));
    }

    /**
     * @param GetEstimatedPositionByKeywordIdsRequest $parameters
     * @return GetEstimatedPositionByKeywordIdsResponse
     */
    public function GetEstimatedPositionByKeywordIds(GetEstimatedPositionByKeywordIdsRequest $parameters)
    {
      return $this->__soapCall("GetEstimatedPositionByKeywordIds", array($parameters));
    }

    /**
     * @param GetEstimatedBidByKeywordsRequest $parameters
     * @return GetEstimatedBidByKeywordsResponse
     */
    public function GetEstimatedBidByKeywords(GetEstimatedBidByKeywordsRequest $parameters)
    {
      return $this->__soapCall("GetEstimatedBidByKeywords", array($parameters));
    }

    /**
     * @param GetEstimatedPositionByKeywordsRequest $parameters
     * @return GetEstimatedPositionByKeywordsResponse
     */
    public function GetEstimatedPositionByKeywords(GetEstimatedPositionByKeywordsRequest $parameters)
    {
      return $this->__soapCall("GetEstimatedPositionByKeywords", array($parameters));
    }

    /**
     * @param GetBidLandscapeByAdGroupIdsRequest $parameters
     * @return GetBidLandscapeByAdGroupIdsResponse
     */
    public function GetBidLandscapeByAdGroupIds(GetBidLandscapeByAdGroupIdsRequest $parameters)
    {
      return $this->__soapCall("GetBidLandscapeByAdGroupIds", array($parameters));
    }

    /**
     * @param GetBidLandscapeByKeywordIdsRequest $parameters
     * @return GetBidLandscapeByKeywordIdsResponse
     */
    public function GetBidLandscapeByKeywordIds(GetBidLandscapeByKeywordIdsRequest $parameters)
    {
      return $this->__soapCall("GetBidLandscapeByKeywordIds", array($parameters));
    }

    /**
     * @param GetHistoricalKeywordPerformanceRequest $parameters
     * @return GetHistoricalKeywordPerformanceResponse
     */
    public function GetHistoricalKeywordPerformance(GetHistoricalKeywordPerformanceRequest $parameters)
    {
      return $this->__soapCall("GetHistoricalKeywordPerformance", array($parameters));
    }

    /**
     * @param GetHistoricalSearchCountRequest $parameters
     * @return GetHistoricalSearchCountResponse
     */
    public function GetHistoricalSearchCount(GetHistoricalSearchCountRequest $parameters)
    {
      return $this->__soapCall("GetHistoricalSearchCount", array($parameters));
    }

    /**
     * @param GetKeywordCategoriesRequest $parameters
     * @return GetKeywordCategoriesResponse
     */
    public function GetKeywordCategories(GetKeywordCategoriesRequest $parameters)
    {
      return $this->__soapCall("GetKeywordCategories", array($parameters));
    }

    /**
     * @param GetKeywordDemographicsRequest $parameters
     * @return GetKeywordDemographicsResponse
     */
    public function GetKeywordDemographics(GetKeywordDemographicsRequest $parameters)
    {
      return $this->__soapCall("GetKeywordDemographics", array($parameters));
    }

    /**
     * @param GetKeywordLocationsRequest $parameters
     * @return GetKeywordLocationsResponse
     */
    public function GetKeywordLocations(GetKeywordLocationsRequest $parameters)
    {
      return $this->__soapCall("GetKeywordLocations", array($parameters));
    }

    /**
     * @param SuggestKeywordsForUrlRequest $parameters
     * @return SuggestKeywordsForUrlResponse
     */
    public function SuggestKeywordsForUrl(SuggestKeywordsForUrlRequest $parameters)
    {
      return $this->__soapCall("SuggestKeywordsForUrl", array($parameters));
    }

    /**
     * @param SuggestKeywordsFromExistingKeywordsRequest $parameters
     * @return SuggestKeywordsFromExistingKeywordsResponse
     */
    public function SuggestKeywordsFromExistingKeywords(SuggestKeywordsFromExistingKeywordsRequest $parameters)
    {
      return $this->__soapCall("SuggestKeywordsFromExistingKeywords", array($parameters));
    }

    /**
     * @param GetAuctionInsightDataRequest $parameters
     * @return GetAuctionInsightDataResponse
     */
    public function GetAuctionInsightData(GetAuctionInsightDataRequest $parameters)
    {
      return $this->__soapCall("GetAuctionInsightData", array($parameters));
    }

    /**
     * @param GetDomainCategoriesRequest $parameters
     * @return GetDomainCategoriesResponse
     */
    public function GetDomainCategories(GetDomainCategoriesRequest $parameters)
    {
      return $this->__soapCall("GetDomainCategories", array($parameters));
    }

    /**
     * @param PutMetricDataRequest $parameters
     * @return PutMetricDataResponse
     */
    public function PutMetricData(PutMetricDataRequest $parameters)
    {
      return $this->__soapCall("PutMetricData", array($parameters));
    }

    /**
     * @param GetKeywordIdeaCategoriesRequest $parameters
     * @return GetKeywordIdeaCategoriesResponse
     */
    public function GetKeywordIdeaCategories(GetKeywordIdeaCategoriesRequest $parameters)
    {
      return $this->__soapCall("GetKeywordIdeaCategories", array($parameters));
    }

    /**
     * @param GetKeywordIdeasRequest $parameters
     * @return GetKeywordIdeasResponse
     */
    public function GetKeywordIdeas(GetKeywordIdeasRequest $parameters)
    {
      return $this->__soapCall("GetKeywordIdeas", array($parameters));
    }

    /**
     * @param GetKeywordTrafficEstimatesRequest $parameters
     * @return GetKeywordTrafficEstimatesResponse
     */
    public function GetKeywordTrafficEstimates(GetKeywordTrafficEstimatesRequest $parameters)
    {
      return $this->__soapCall("GetKeywordTrafficEstimates", array($parameters));
    }

}
