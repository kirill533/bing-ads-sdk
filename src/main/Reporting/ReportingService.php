<?php

namespace PMG\BingAds\Reporting;

class ReportingService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/Reporting/v13';
    const WSDL_PROD = 'https://reporting.api.bingads.microsoft.com/Api/Advertiser/Reporting/v13/ReportingService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://reporting.api.sandbox.bingads.microsoft.com/Api/Advertiser/Reporting/v13/ReportingService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SubmitGenerateReportRequest' => 'PMG\\BingAds\\Reporting\\SubmitGenerateReportRequest',
      'ReportRequest' => 'PMG\\BingAds\\Reporting\\ReportRequest',
      'AccountPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\AccountPerformanceReportRequest',
      'ArrayOfAccountPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAccountPerformanceReportColumn',
      'AccountPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\AccountPerformanceReportFilter',
      'AccountReportScope' => 'PMG\\BingAds\\Reporting\\AccountReportScope',
      'ReportTime' => 'PMG\\BingAds\\Reporting\\ReportTime',
      'Date' => 'PMG\\BingAds\\Reporting\\Date',
      'CampaignPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\CampaignPerformanceReportRequest',
      'ArrayOfCampaignPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfCampaignPerformanceReportColumn',
      'CampaignPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\CampaignPerformanceReportFilter',
      'AccountThroughCampaignReportScope' => 'PMG\\BingAds\\Reporting\\AccountThroughCampaignReportScope',
      'ArrayOfCampaignReportScope' => 'PMG\\BingAds\\Reporting\\ArrayOfCampaignReportScope',
      'CampaignReportScope' => 'PMG\\BingAds\\Reporting\\CampaignReportScope',
      'AdDynamicTextPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\AdDynamicTextPerformanceReportRequest',
      'ArrayOfAdDynamicTextPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdDynamicTextPerformanceReportColumn',
      'AdDynamicTextPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\AdDynamicTextPerformanceReportFilter',
      'AccountThroughAdGroupReportScope' => 'PMG\\BingAds\\Reporting\\AccountThroughAdGroupReportScope',
      'ArrayOfAdGroupReportScope' => 'PMG\\BingAds\\Reporting\\ArrayOfAdGroupReportScope',
      'AdGroupReportScope' => 'PMG\\BingAds\\Reporting\\AdGroupReportScope',
      'AdGroupPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\AdGroupPerformanceReportRequest',
      'ArrayOfAdGroupPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdGroupPerformanceReportColumn',
      'AdGroupPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\AdGroupPerformanceReportFilter',
      'AdPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\AdPerformanceReportRequest',
      'ArrayOfAdPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdPerformanceReportColumn',
      'AdPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\AdPerformanceReportFilter',
      'KeywordPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\KeywordPerformanceReportRequest',
      'ArrayOfKeywordPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfKeywordPerformanceReportColumn',
      'KeywordPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\KeywordPerformanceReportFilter',
      'ArrayOfKeywordPerformanceReportSort' => 'PMG\\BingAds\\Reporting\\ArrayOfKeywordPerformanceReportSort',
      'KeywordPerformanceReportSort' => 'PMG\\BingAds\\Reporting\\KeywordPerformanceReportSort',
      'DestinationUrlPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\DestinationUrlPerformanceReportRequest',
      'ArrayOfDestinationUrlPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfDestinationUrlPerformanceReportColumn',
      'DestinationUrlPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\DestinationUrlPerformanceReportFilter',
      'BudgetSummaryReportRequest' => 'PMG\\BingAds\\Reporting\\BudgetSummaryReportRequest',
      'ArrayOfBudgetSummaryReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfBudgetSummaryReportColumn',
      'AgeGenderAudienceReportRequest' => 'PMG\\BingAds\\Reporting\\AgeGenderAudienceReportRequest',
      'ArrayOfAgeGenderAudienceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAgeGenderAudienceReportColumn',
      'AgeGenderAudienceReportFilter' => 'PMG\\BingAds\\Reporting\\AgeGenderAudienceReportFilter',
      'ProfessionalDemographicsAudienceReportRequest' => 'PMG\\BingAds\\Reporting\\ProfessionalDemographicsAudienceReportRequest',
      'ArrayOfProfessionalDemographicsAudienceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProfessionalDemographicsAudienceReportColumn',
      'ProfessionalDemographicsAudienceReportFilter' => 'PMG\\BingAds\\Reporting\\ProfessionalDemographicsAudienceReportFilter',
      'UserLocationPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\UserLocationPerformanceReportRequest',
      'ArrayOfUserLocationPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfUserLocationPerformanceReportColumn',
      'UserLocationPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\UserLocationPerformanceReportFilter',
      'PublisherUsagePerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\PublisherUsagePerformanceReportRequest',
      'ArrayOfPublisherUsagePerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfPublisherUsagePerformanceReportColumn',
      'PublisherUsagePerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\PublisherUsagePerformanceReportFilter',
      'SearchQueryPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\SearchQueryPerformanceReportRequest',
      'ArrayOfSearchQueryPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfSearchQueryPerformanceReportColumn',
      'SearchQueryPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\SearchQueryPerformanceReportFilter',
      'ConversionPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\ConversionPerformanceReportRequest',
      'ArrayOfConversionPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfConversionPerformanceReportColumn',
      'ConversionPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\ConversionPerformanceReportFilter',
      'GoalsAndFunnelsReportRequest' => 'PMG\\BingAds\\Reporting\\GoalsAndFunnelsReportRequest',
      'ArrayOfGoalsAndFunnelsReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfGoalsAndFunnelsReportColumn',
      'GoalsAndFunnelsReportFilter' => 'PMG\\BingAds\\Reporting\\GoalsAndFunnelsReportFilter',
      'NegativeKeywordConflictReportRequest' => 'PMG\\BingAds\\Reporting\\NegativeKeywordConflictReportRequest',
      'ArrayOfNegativeKeywordConflictReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfNegativeKeywordConflictReportColumn',
      'NegativeKeywordConflictReportFilter' => 'PMG\\BingAds\\Reporting\\NegativeKeywordConflictReportFilter',
      'SearchCampaignChangeHistoryReportRequest' => 'PMG\\BingAds\\Reporting\\SearchCampaignChangeHistoryReportRequest',
      'ArrayOfSearchCampaignChangeHistoryReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfSearchCampaignChangeHistoryReportColumn',
      'SearchCampaignChangeHistoryReportFilter' => 'PMG\\BingAds\\Reporting\\SearchCampaignChangeHistoryReportFilter',
      'AdExtensionByAdReportRequest' => 'PMG\\BingAds\\Reporting\\AdExtensionByAdReportRequest',
      'ArrayOfAdExtensionByAdReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdExtensionByAdReportColumn',
      'AdExtensionByAdReportFilter' => 'PMG\\BingAds\\Reporting\\AdExtensionByAdReportFilter',
      'AdExtensionByKeywordReportRequest' => 'PMG\\BingAds\\Reporting\\AdExtensionByKeywordReportRequest',
      'ArrayOfAdExtensionByKeywordReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdExtensionByKeywordReportColumn',
      'AdExtensionByKeywordReportFilter' => 'PMG\\BingAds\\Reporting\\AdExtensionByKeywordReportFilter',
      'AudiencePerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\AudiencePerformanceReportRequest',
      'ArrayOfAudiencePerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAudiencePerformanceReportColumn',
      'AudiencePerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\AudiencePerformanceReportFilter',
      'AdExtensionDetailReportRequest' => 'PMG\\BingAds\\Reporting\\AdExtensionDetailReportRequest',
      'ArrayOfAdExtensionDetailReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfAdExtensionDetailReportColumn',
      'AdExtensionDetailReportFilter' => 'PMG\\BingAds\\Reporting\\AdExtensionDetailReportFilter',
      'ShareOfVoiceReportRequest' => 'PMG\\BingAds\\Reporting\\ShareOfVoiceReportRequest',
      'ArrayOfShareOfVoiceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfShareOfVoiceReportColumn',
      'ShareOfVoiceReportFilter' => 'PMG\\BingAds\\Reporting\\ShareOfVoiceReportFilter',
      'ProductDimensionPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\ProductDimensionPerformanceReportRequest',
      'ArrayOfProductDimensionPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductDimensionPerformanceReportColumn',
      'ProductDimensionPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\ProductDimensionPerformanceReportFilter',
      'ProductPartitionPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\ProductPartitionPerformanceReportRequest',
      'ArrayOfProductPartitionPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductPartitionPerformanceReportColumn',
      'ProductPartitionPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\ProductPartitionPerformanceReportFilter',
      'ProductPartitionUnitPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\ProductPartitionUnitPerformanceReportRequest',
      'ArrayOfProductPartitionUnitPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductPartitionUnitPerformanceReportColumn',
      'ProductPartitionUnitPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\ProductPartitionUnitPerformanceReportFilter',
      'ProductSearchQueryPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\ProductSearchQueryPerformanceReportRequest',
      'ArrayOfProductSearchQueryPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductSearchQueryPerformanceReportColumn',
      'ProductSearchQueryPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\ProductSearchQueryPerformanceReportFilter',
      'ProductMatchCountReportRequest' => 'PMG\\BingAds\\Reporting\\ProductMatchCountReportRequest',
      'ArrayOfProductMatchCountReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductMatchCountReportColumn',
      'ProductNegativeKeywordConflictReportRequest' => 'PMG\\BingAds\\Reporting\\ProductNegativeKeywordConflictReportRequest',
      'ArrayOfProductNegativeKeywordConflictReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfProductNegativeKeywordConflictReportColumn',
      'ProductNegativeKeywordConflictReportFilter' => 'PMG\\BingAds\\Reporting\\ProductNegativeKeywordConflictReportFilter',
      'CallDetailReportRequest' => 'PMG\\BingAds\\Reporting\\CallDetailReportRequest',
      'ArrayOfCallDetailReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfCallDetailReportColumn',
      'CallDetailReportFilter' => 'PMG\\BingAds\\Reporting\\CallDetailReportFilter',
      'GeographicPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\GeographicPerformanceReportRequest',
      'ArrayOfGeographicPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfGeographicPerformanceReportColumn',
      'GeographicPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\GeographicPerformanceReportFilter',
      'DSASearchQueryPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\DSASearchQueryPerformanceReportRequest',
      'ArrayOfDSASearchQueryPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfDSASearchQueryPerformanceReportColumn',
      'DSASearchQueryPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\DSASearchQueryPerformanceReportFilter',
      'DSAAutoTargetPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\DSAAutoTargetPerformanceReportRequest',
      'ArrayOfDSAAutoTargetPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfDSAAutoTargetPerformanceReportColumn',
      'DSAAutoTargetPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\DSAAutoTargetPerformanceReportFilter',
      'DSACategoryPerformanceReportRequest' => 'PMG\\BingAds\\Reporting\\DSACategoryPerformanceReportRequest',
      'ArrayOfDSACategoryPerformanceReportColumn' => 'PMG\\BingAds\\Reporting\\ArrayOfDSACategoryPerformanceReportColumn',
      'DSACategoryPerformanceReportFilter' => 'PMG\\BingAds\\Reporting\\DSACategoryPerformanceReportFilter',
      'SubmitGenerateReportResponse' => 'PMG\\BingAds\\Reporting\\SubmitGenerateReportResponse',
      'ArrayOfBatchError' => 'PMG\\BingAds\\Reporting\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\Reporting\\BatchError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\Reporting\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\Reporting\\OperationError',
      'PollGenerateReportRequest' => 'PMG\\BingAds\\Reporting\\PollGenerateReportRequest',
      'PollGenerateReportResponse' => 'PMG\\BingAds\\Reporting\\PollGenerateReportResponse',
      'ReportRequestStatus' => 'PMG\\BingAds\\Reporting\\ReportRequestStatus',
      'ArrayOflong' => 'PMG\\BingAds\\Reporting\\ArrayOflong',
      'ArrayOfint' => 'PMG\\BingAds\\Reporting\\ArrayOfint',
      'ArrayOfstring' => 'PMG\\BingAds\\Reporting\\ArrayOfstring',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\Reporting\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\Reporting\\AdApiError',
      'ApplicationFault' => 'PMG\\BingAds\\Reporting\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\Reporting\\ApiFault',
      'ApiFaultDetail' => 'PMG\\BingAds\\Reporting\\ApiFault',
      'AdApiFault' => 'PMG\\BingAds\\Reporting\\AdApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\Reporting\\AdApiFault',
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
     * @param SubmitGenerateReportRequest $parameters
     * @return SubmitGenerateReportResponse
     */
    public function submitGenerateReport(SubmitGenerateReportRequest $parameters)
    {
        return $this->__soapCall("SubmitGenerateReport", [$parameters]);
    }

    /**
     * @param PollGenerateReportRequest $parameters
     * @return PollGenerateReportResponse
     */
    public function pollGenerateReport(PollGenerateReportRequest $parameters)
    {
        return $this->__soapCall("PollGenerateReport", [$parameters]);
    }

}
