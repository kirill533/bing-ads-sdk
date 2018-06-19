<?php

namespace PMG\BingAds\CampaignMangagement;

class CampaignManagementService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/CampaignManagement/v12';
    const WSDL_PROD = 'https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v12/CampaignManagementService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://campaign.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v12/CampaignManagementService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'TextAd' => 'PMG\\BingAds\\CampaignMangagement\\TextAd',
      'Ad' => 'PMG\\BingAds\\CampaignMangagement\\Ad',
      'ArrayOfAppUrl' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAppUrl',
      'AppUrl' => 'PMG\\BingAds\\CampaignMangagement\\AppUrl',
      'CustomParameters' => 'PMG\\BingAds\\CampaignMangagement\\CustomParameters',
      'ArrayOfCustomParameter' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfCustomParameter',
      'CustomParameter' => 'PMG\\BingAds\\CampaignMangagement\\CustomParameter',
      'ProductAd' => 'PMG\\BingAds\\CampaignMangagement\\ProductAd',
      'AppInstallAd' => 'PMG\\BingAds\\CampaignMangagement\\AppInstallAd',
      'ExpandedTextAd' => 'PMG\\BingAds\\CampaignMangagement\\ExpandedTextAd',
      'DynamicSearchAd' => 'PMG\\BingAds\\CampaignMangagement\\DynamicSearchAd',
      'ResponsiveAd' => 'PMG\\BingAds\\CampaignMangagement\\ResponsiveAd',
      'AddCampaignsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddCampaignsRequest',
      'ArrayOfCampaign' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfCampaign',
      'Campaign' => 'PMG\\BingAds\\CampaignMangagement\\Campaign',
      'BiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\BiddingScheme',
      'MaxClicksBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\MaxClicksBiddingScheme',
      'Bid' => 'PMG\\BingAds\\CampaignMangagement\\Bid',
      'MaxConversionsBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\MaxConversionsBiddingScheme',
      'TargetCpaBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\TargetCpaBiddingScheme',
      'ManualCpcBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\ManualCpcBiddingScheme',
      'EnhancedCpcBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\EnhancedCpcBiddingScheme',
      'InheritFromParentBiddingScheme' => 'PMG\\BingAds\\CampaignMangagement\\InheritFromParentBiddingScheme',
      'ArrayOfSetting' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfSetting',
      'Setting' => 'PMG\\BingAds\\CampaignMangagement\\Setting',
      'ShoppingSetting' => 'PMG\\BingAds\\CampaignMangagement\\ShoppingSetting',
      'DynamicSearchAdsSetting' => 'PMG\\BingAds\\CampaignMangagement\\DynamicSearchAdsSetting',
      'TargetSetting' => 'PMG\\BingAds\\CampaignMangagement\\TargetSetting',
      'ArrayOfTargetSettingDetail' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfTargetSettingDetail',
      'TargetSettingDetail' => 'PMG\\BingAds\\CampaignMangagement\\TargetSettingDetail',
      'CoOpSetting' => 'PMG\\BingAds\\CampaignMangagement\\CoOpSetting',
      'AddCampaignsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddCampaignsResponse',
      'ArrayOfBatchError' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\CampaignMangagement\\BatchError',
      'EditorialError' => 'PMG\\BingAds\\CampaignMangagement\\EditorialError',
      'ApiFaultDetail' => 'PMG\\BingAds\\CampaignMangagement\\ApiFaultDetail',
      'ArrayOfOperationError' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\CampaignMangagement\\OperationError',
      'GetCampaignsByAccountIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignsByAccountIdRequest',
      'GetCampaignsByAccountIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignsByAccountIdResponse',
      'GetCampaignsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignsByIdsRequest',
      'GetCampaignsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignsByIdsResponse',
      'DeleteCampaignsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteCampaignsRequest',
      'DeleteCampaignsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteCampaignsResponse',
      'UpdateCampaignsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateCampaignsRequest',
      'UpdateCampaignsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateCampaignsResponse',
      'GetNegativeSitesByCampaignIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeSitesByCampaignIdsRequest',
      'GetNegativeSitesByCampaignIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeSitesByCampaignIdsResponse',
      'ArrayOfCampaignNegativeSites' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfCampaignNegativeSites',
      'CampaignNegativeSites' => 'PMG\\BingAds\\CampaignMangagement\\CampaignNegativeSites',
      'SetNegativeSitesToCampaignsRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetNegativeSitesToCampaignsRequest',
      'SetNegativeSitesToCampaignsResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetNegativeSitesToCampaignsResponse',
      'GetConfigValueRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetConfigValueRequest',
      'GetConfigValueResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetConfigValueResponse',
      'GetBSCCountriesRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetBSCCountriesRequest',
      'GetBSCCountriesResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetBSCCountriesResponse',
      'AddAdGroupsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddAdGroupsRequest',
      'ArrayOfAdGroup' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdGroup',
      'AdGroup' => 'PMG\\BingAds\\CampaignMangagement\\AdGroup',
      'AdRotation' => 'PMG\\BingAds\\CampaignMangagement\\AdRotation',
      'Date' => 'PMG\\BingAds\\CampaignMangagement\\Date',
      'AddAdGroupsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddAdGroupsResponse',
      'DeleteAdGroupsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdGroupsRequest',
      'DeleteAdGroupsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdGroupsResponse',
      'GetAdGroupsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupsByIdsRequest',
      'GetAdGroupsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupsByIdsResponse',
      'GetAdGroupsByCampaignIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupsByCampaignIdRequest',
      'GetAdGroupsByCampaignIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupsByCampaignIdResponse',
      'UpdateAdGroupsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdGroupsRequest',
      'UpdateAdGroupsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdGroupsResponse',
      'GetNegativeSitesByAdGroupIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeSitesByAdGroupIdsRequest',
      'GetNegativeSitesByAdGroupIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeSitesByAdGroupIdsResponse',
      'ArrayOfAdGroupNegativeSites' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdGroupNegativeSites',
      'AdGroupNegativeSites' => 'PMG\\BingAds\\CampaignMangagement\\AdGroupNegativeSites',
      'SetNegativeSitesToAdGroupsRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetNegativeSitesToAdGroupsRequest',
      'SetNegativeSitesToAdGroupsResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetNegativeSitesToAdGroupsResponse',
      'GetGeoLocationsFileUrlRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetGeoLocationsFileUrlRequest',
      'GetGeoLocationsFileUrlResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetGeoLocationsFileUrlResponse',
      'AddAdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddAdsRequest',
      'ArrayOfAd' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAd',
      'AddAdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddAdsResponse',
      'EditorialApiFaultDetail' => 'PMG\\BingAds\\CampaignMangagement\\EditorialApiFaultDetail',
      'ArrayOfEditorialError' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfEditorialError',
      'DeleteAdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdsRequest',
      'DeleteAdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdsResponse',
      'GetAdsByEditorialStatusRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByEditorialStatusRequest',
      'ArrayOfAdType' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdType',
      'GetAdsByEditorialStatusResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByEditorialStatusResponse',
      'GetAdsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByIdsRequest',
      'GetAdsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByIdsResponse',
      'GetAdsByAdGroupIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByAdGroupIdRequest',
      'GetAdsByAdGroupIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdsByAdGroupIdResponse',
      'UpdateAdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdsRequest',
      'UpdateAdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdsResponse',
      'AddKeywordsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddKeywordsRequest',
      'ArrayOfKeyword' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfKeyword',
      'Keyword' => 'PMG\\BingAds\\CampaignMangagement\\Keyword',
      'AddKeywordsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddKeywordsResponse',
      'DeleteKeywordsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteKeywordsRequest',
      'DeleteKeywordsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteKeywordsResponse',
      'GetKeywordsByEditorialStatusRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByEditorialStatusRequest',
      'GetKeywordsByEditorialStatusResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByEditorialStatusResponse',
      'GetKeywordsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByIdsRequest',
      'GetKeywordsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByIdsResponse',
      'GetKeywordsByAdGroupIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByAdGroupIdRequest',
      'GetKeywordsByAdGroupIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetKeywordsByAdGroupIdResponse',
      'UpdateKeywordsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateKeywordsRequest',
      'UpdateKeywordsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateKeywordsResponse',
      'AppealEditorialRejectionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AppealEditorialRejectionsRequest',
      'ArrayOfEntityIdToParentIdAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfEntityIdToParentIdAssociation',
      'EntityIdToParentIdAssociation' => 'PMG\\BingAds\\CampaignMangagement\\EntityIdToParentIdAssociation',
      'AppealEditorialRejectionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AppealEditorialRejectionsResponse',
      'GetEditorialReasonsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetEditorialReasonsByIdsRequest',
      'GetEditorialReasonsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetEditorialReasonsByIdsResponse',
      'ArrayOfEditorialReasonCollection' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfEditorialReasonCollection',
      'EditorialReasonCollection' => 'PMG\\BingAds\\CampaignMangagement\\EditorialReasonCollection',
      'ArrayOfEditorialReason' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfEditorialReason',
      'EditorialReason' => 'PMG\\BingAds\\CampaignMangagement\\EditorialReason',
      'GetAccountMigrationStatusesRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAccountMigrationStatusesRequest',
      'GetAccountMigrationStatusesResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAccountMigrationStatusesResponse',
      'ArrayOfAccountMigrationStatusesInfo' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAccountMigrationStatusesInfo',
      'AccountMigrationStatusesInfo' => 'PMG\\BingAds\\CampaignMangagement\\AccountMigrationStatusesInfo',
      'ArrayOfMigrationStatusInfo' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfMigrationStatusInfo',
      'MigrationStatusInfo' => 'PMG\\BingAds\\CampaignMangagement\\MigrationStatusInfo',
      'SetAccountPropertiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetAccountPropertiesRequest',
      'ArrayOfAccountProperty' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAccountProperty',
      'AccountProperty' => 'PMG\\BingAds\\CampaignMangagement\\AccountProperty',
      'SetAccountPropertiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetAccountPropertiesResponse',
      'GetAccountPropertiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAccountPropertiesRequest',
      'ArrayOfAccountPropertyName' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAccountPropertyName',
      'GetAccountPropertiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAccountPropertiesResponse',
      'AddAdExtensionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddAdExtensionsRequest',
      'ArrayOfAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtension',
      'AdExtension' => 'PMG\\BingAds\\CampaignMangagement\\AdExtension',
      'Schedule' => 'PMG\\BingAds\\CampaignMangagement\\Schedule',
      'ArrayOfDayTime' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfDayTime',
      'DayTime' => 'PMG\\BingAds\\CampaignMangagement\\DayTime',
      'LocationAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\LocationAdExtension',
      'Address' => 'PMG\\BingAds\\CampaignMangagement\\Address',
      'GeoPoint' => 'PMG\\BingAds\\CampaignMangagement\\GeoPoint',
      'CallAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\CallAdExtension',
      'ImageAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\ImageAdExtension',
      'AppAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\AppAdExtension',
      'ReviewAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\ReviewAdExtension',
      'CalloutAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\CalloutAdExtension',
      'SitelinkAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\SitelinkAdExtension',
      'StructuredSnippetAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\StructuredSnippetAdExtension',
      'PriceAdExtension' => 'PMG\\BingAds\\CampaignMangagement\\PriceAdExtension',
      'ArrayOfPriceTableRow' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfPriceTableRow',
      'PriceTableRow' => 'PMG\\BingAds\\CampaignMangagement\\PriceTableRow',
      'AddAdExtensionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddAdExtensionsResponse',
      'ArrayOfAdExtensionIdentity' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionIdentity',
      'AdExtensionIdentity' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionIdentity',
      'ArrayOfBatchErrorCollection' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfBatchErrorCollection',
      'BatchErrorCollection' => 'PMG\\BingAds\\CampaignMangagement\\BatchErrorCollection',
      'EditorialErrorCollection' => 'PMG\\BingAds\\CampaignMangagement\\EditorialErrorCollection',
      'GetAdExtensionsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsByIdsRequest',
      'GetAdExtensionsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsByIdsResponse',
      'UpdateAdExtensionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdExtensionsRequest',
      'UpdateAdExtensionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdExtensionsResponse',
      'DeleteAdExtensionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdExtensionsRequest',
      'DeleteAdExtensionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdExtensionsResponse',
      'GetAdExtensionsEditorialReasonsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsEditorialReasonsRequest',
      'ArrayOfAdExtensionIdToEntityIdAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionIdToEntityIdAssociation',
      'AdExtensionIdToEntityIdAssociation' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionIdToEntityIdAssociation',
      'GetAdExtensionsEditorialReasonsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsEditorialReasonsResponse',
      'ArrayOfAdExtensionEditorialReasonCollection' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionEditorialReasonCollection',
      'AdExtensionEditorialReasonCollection' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionEditorialReasonCollection',
      'ArrayOfAdExtensionEditorialReason' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionEditorialReason',
      'AdExtensionEditorialReason' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionEditorialReason',
      'SetAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetAdExtensionsAssociationsRequest',
      'SetAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetAdExtensionsAssociationsResponse',
      'GetAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsAssociationsRequest',
      'GetAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionsAssociationsResponse',
      'ArrayOfAdExtensionAssociationCollection' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionAssociationCollection',
      'AdExtensionAssociationCollection' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionAssociationCollection',
      'ArrayOfAdExtensionAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdExtensionAssociation',
      'AdExtensionAssociation' => 'PMG\\BingAds\\CampaignMangagement\\AdExtensionAssociation',
      'DeleteAdExtensionsAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdExtensionsAssociationsRequest',
      'DeleteAdExtensionsAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdExtensionsAssociationsResponse',
      'GetAdExtensionIdsByAccountIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionIdsByAccountIdRequest',
      'GetAdExtensionIdsByAccountIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdExtensionIdsByAccountIdResponse',
      'AddMediaRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddMediaRequest',
      'ArrayOfMedia' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfMedia',
      'Media' => 'PMG\\BingAds\\CampaignMangagement\\Media',
      'Image' => 'PMG\\BingAds\\CampaignMangagement\\Image',
      'AddMediaResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddMediaResponse',
      'DeleteMediaRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteMediaRequest',
      'DeleteMediaResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteMediaResponse',
      'GetMediaMetaDataByAccountIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaMetaDataByAccountIdRequest',
      'GetMediaMetaDataByAccountIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaMetaDataByAccountIdResponse',
      'ArrayOfMediaMetaData' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfMediaMetaData',
      'MediaMetaData' => 'PMG\\BingAds\\CampaignMangagement\\MediaMetaData',
      'ArrayOfMediaRepresentation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfMediaRepresentation',
      'MediaRepresentation' => 'PMG\\BingAds\\CampaignMangagement\\MediaRepresentation',
      'ImageMediaRepresentation' => 'PMG\\BingAds\\CampaignMangagement\\ImageMediaRepresentation',
      'GetMediaMetaDataByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaMetaDataByIdsRequest',
      'GetMediaMetaDataByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaMetaDataByIdsResponse',
      'GetMediaAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaAssociationsRequest',
      'GetMediaAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetMediaAssociationsResponse',
      'ArrayOfArrayOfMediaAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfArrayOfMediaAssociation',
      'ArrayOfMediaAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfMediaAssociation',
      'MediaAssociation' => 'PMG\\BingAds\\CampaignMangagement\\MediaAssociation',
      'GetAdGroupCriterionsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupCriterionsByIdsRequest',
      'GetAdGroupCriterionsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAdGroupCriterionsByIdsResponse',
      'ArrayOfAdGroupCriterion' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdGroupCriterion',
      'AdGroupCriterion' => 'PMG\\BingAds\\CampaignMangagement\\AdGroupCriterion',
      'Criterion' => 'PMG\\BingAds\\CampaignMangagement\\Criterion',
      'ProductPartition' => 'PMG\\BingAds\\CampaignMangagement\\ProductPartition',
      'ProductCondition' => 'PMG\\BingAds\\CampaignMangagement\\ProductCondition',
      'ProductScope' => 'PMG\\BingAds\\CampaignMangagement\\ProductScope',
      'ArrayOfProductCondition' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfProductCondition',
      'Webpage' => 'PMG\\BingAds\\CampaignMangagement\\Webpage',
      'WebpageParameter' => 'PMG\\BingAds\\CampaignMangagement\\WebpageParameter',
      'ArrayOfWebpageCondition' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfWebpageCondition',
      'WebpageCondition' => 'PMG\\BingAds\\CampaignMangagement\\WebpageCondition',
      'AgeCriterion' => 'PMG\\BingAds\\CampaignMangagement\\AgeCriterion',
      'DeviceCriterion' => 'PMG\\BingAds\\CampaignMangagement\\DeviceCriterion',
      'DayTimeCriterion' => 'PMG\\BingAds\\CampaignMangagement\\DayTimeCriterion',
      'GenderCriterion' => 'PMG\\BingAds\\CampaignMangagement\\GenderCriterion',
      'RadiusCriterion' => 'PMG\\BingAds\\CampaignMangagement\\RadiusCriterion',
      'LocationCriterion' => 'PMG\\BingAds\\CampaignMangagement\\LocationCriterion',
      'LocationIntentCriterion' => 'PMG\\BingAds\\CampaignMangagement\\LocationIntentCriterion',
      'AudienceCriterion' => 'PMG\\BingAds\\CampaignMangagement\\AudienceCriterion',
      'ProfileCriterion' => 'PMG\\BingAds\\CampaignMangagement\\ProfileCriterion',
      'BiddableAdGroupCriterion' => 'PMG\\BingAds\\CampaignMangagement\\BiddableAdGroupCriterion',
      'CriterionBid' => 'PMG\\BingAds\\CampaignMangagement\\CriterionBid',
      'FixedBid' => 'PMG\\BingAds\\CampaignMangagement\\FixedBid',
      'BidMultiplier' => 'PMG\\BingAds\\CampaignMangagement\\BidMultiplier',
      'NegativeAdGroupCriterion' => 'PMG\\BingAds\\CampaignMangagement\\NegativeAdGroupCriterion',
      'AddAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddAdGroupCriterionsRequest',
      'AddAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddAdGroupCriterionsResponse',
      'UpdateAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdGroupCriterionsRequest',
      'UpdateAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAdGroupCriterionsResponse',
      'DeleteAdGroupCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdGroupCriterionsRequest',
      'DeleteAdGroupCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAdGroupCriterionsResponse',
      'ApplyProductPartitionActionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\ApplyProductPartitionActionsRequest',
      'ArrayOfAdGroupCriterionAction' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdGroupCriterionAction',
      'AdGroupCriterionAction' => 'PMG\\BingAds\\CampaignMangagement\\AdGroupCriterionAction',
      'ApplyProductPartitionActionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\ApplyProductPartitionActionsResponse',
      'GetBMCStoresByCustomerIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetBMCStoresByCustomerIdRequest',
      'GetBMCStoresByCustomerIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetBMCStoresByCustomerIdResponse',
      'ArrayOfBMCStore' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfBMCStore',
      'BMCStore' => 'PMG\\BingAds\\CampaignMangagement\\BMCStore',
      'AddNegativeKeywordsToEntitiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddNegativeKeywordsToEntitiesRequest',
      'ArrayOfEntityNegativeKeyword' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfEntityNegativeKeyword',
      'EntityNegativeKeyword' => 'PMG\\BingAds\\CampaignMangagement\\EntityNegativeKeyword',
      'ArrayOfNegativeKeyword' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfNegativeKeyword',
      'NegativeKeyword' => 'PMG\\BingAds\\CampaignMangagement\\NegativeKeyword',
      'SharedListItem' => 'PMG\\BingAds\\CampaignMangagement\\SharedListItem',
      'AddNegativeKeywordsToEntitiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddNegativeKeywordsToEntitiesResponse',
      'ArrayOfIdCollection' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfIdCollection',
      'IdCollection' => 'PMG\\BingAds\\CampaignMangagement\\IdCollection',
      'GetNegativeKeywordsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeKeywordsByEntityIdsRequest',
      'GetNegativeKeywordsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetNegativeKeywordsByEntityIdsResponse',
      'DeleteNegativeKeywordsFromEntitiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteNegativeKeywordsFromEntitiesRequest',
      'DeleteNegativeKeywordsFromEntitiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteNegativeKeywordsFromEntitiesResponse',
      'GetSharedEntitiesByAccountIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntitiesByAccountIdRequest',
      'GetSharedEntitiesByAccountIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntitiesByAccountIdResponse',
      'ArrayOfSharedEntity' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfSharedEntity',
      'SharedEntity' => 'PMG\\BingAds\\CampaignMangagement\\SharedEntity',
      'SharedList' => 'PMG\\BingAds\\CampaignMangagement\\SharedList',
      'NegativeKeywordList' => 'PMG\\BingAds\\CampaignMangagement\\NegativeKeywordList',
      'AddSharedEntityRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddSharedEntityRequest',
      'ArrayOfSharedListItem' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfSharedListItem',
      'AddSharedEntityResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddSharedEntityResponse',
      'GetListItemsBySharedListRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetListItemsBySharedListRequest',
      'GetListItemsBySharedListResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetListItemsBySharedListResponse',
      'AddListItemsToSharedListRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddListItemsToSharedListRequest',
      'AddListItemsToSharedListResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddListItemsToSharedListResponse',
      'UpdateSharedEntitiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateSharedEntitiesRequest',
      'UpdateSharedEntitiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateSharedEntitiesResponse',
      'DeleteListItemsFromSharedListRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteListItemsFromSharedListRequest',
      'DeleteListItemsFromSharedListResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteListItemsFromSharedListResponse',
      'SetSharedEntityAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetSharedEntityAssociationsRequest',
      'ArrayOfSharedEntityAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfSharedEntityAssociation',
      'SharedEntityAssociation' => 'PMG\\BingAds\\CampaignMangagement\\SharedEntityAssociation',
      'SetSharedEntityAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetSharedEntityAssociationsResponse',
      'DeleteSharedEntityAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteSharedEntityAssociationsRequest',
      'DeleteSharedEntityAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteSharedEntityAssociationsResponse',
      'GetSharedEntityAssociationsBySharedEntityIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntityAssociationsBySharedEntityIdsRequest',
      'GetSharedEntityAssociationsBySharedEntityIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntityAssociationsBySharedEntityIdsResponse',
      'GetSharedEntityAssociationsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntityAssociationsByEntityIdsRequest',
      'GetSharedEntityAssociationsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetSharedEntityAssociationsByEntityIdsResponse',
      'DeleteSharedEntitiesRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteSharedEntitiesRequest',
      'DeleteSharedEntitiesResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteSharedEntitiesResponse',
      'GetCampaignSizesByAccountIdRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignSizesByAccountIdRequest',
      'GetCampaignSizesByAccountIdResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignSizesByAccountIdResponse',
      'ArrayOfCampaignSize' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfCampaignSize',
      'CampaignSize' => 'PMG\\BingAds\\CampaignMangagement\\CampaignSize',
      'AddCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddCampaignCriterionsRequest',
      'ArrayOfCampaignCriterion' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfCampaignCriterion',
      'CampaignCriterion' => 'PMG\\BingAds\\CampaignMangagement\\CampaignCriterion',
      'NegativeCampaignCriterion' => 'PMG\\BingAds\\CampaignMangagement\\NegativeCampaignCriterion',
      'BiddableCampaignCriterion' => 'PMG\\BingAds\\CampaignMangagement\\BiddableCampaignCriterion',
      'AddCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddCampaignCriterionsResponse',
      'UpdateCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateCampaignCriterionsRequest',
      'UpdateCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateCampaignCriterionsResponse',
      'DeleteCampaignCriterionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteCampaignCriterionsRequest',
      'DeleteCampaignCriterionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteCampaignCriterionsResponse',
      'GetCampaignCriterionsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignCriterionsByIdsRequest',
      'GetCampaignCriterionsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignCriterionsByIdsResponse',
      'AddBudgetsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddBudgetsRequest',
      'ArrayOfBudget' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfBudget',
      'Budget' => 'PMG\\BingAds\\CampaignMangagement\\Budget',
      'AddBudgetsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddBudgetsResponse',
      'UpdateBudgetsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateBudgetsRequest',
      'UpdateBudgetsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateBudgetsResponse',
      'DeleteBudgetsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteBudgetsRequest',
      'DeleteBudgetsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteBudgetsResponse',
      'GetBudgetsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetBudgetsByIdsRequest',
      'GetBudgetsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetBudgetsByIdsResponse',
      'GetCampaignIdsByBudgetIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignIdsByBudgetIdsRequest',
      'GetCampaignIdsByBudgetIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetCampaignIdsByBudgetIdsResponse',
      'AddAudiencesRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddAudiencesRequest',
      'ArrayOfAudience' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAudience',
      'Audience' => 'PMG\\BingAds\\CampaignMangagement\\Audience',
      'RemarketingList' => 'PMG\\BingAds\\CampaignMangagement\\RemarketingList',
      'RemarketingRule' => 'PMG\\BingAds\\CampaignMangagement\\RemarketingRule',
      'PageVisitorsRule' => 'PMG\\BingAds\\CampaignMangagement\\PageVisitorsRule',
      'ArrayOfRuleItemGroup' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfRuleItemGroup',
      'RuleItemGroup' => 'PMG\\BingAds\\CampaignMangagement\\RuleItemGroup',
      'ArrayOfRuleItem' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfRuleItem',
      'RuleItem' => 'PMG\\BingAds\\CampaignMangagement\\RuleItem',
      'StringRuleItem' => 'PMG\\BingAds\\CampaignMangagement\\StringRuleItem',
      'PageVisitorsWhoVisitedAnotherPageRule' => 'PMG\\BingAds\\CampaignMangagement\\PageVisitorsWhoVisitedAnotherPageRule',
      'PageVisitorsWhoDidNotVisitAnotherPageRule' => 'PMG\\BingAds\\CampaignMangagement\\PageVisitorsWhoDidNotVisitAnotherPageRule',
      'CustomEventsRule' => 'PMG\\BingAds\\CampaignMangagement\\CustomEventsRule',
      'CustomAudience' => 'PMG\\BingAds\\CampaignMangagement\\CustomAudience',
      'InMarketAudience' => 'PMG\\BingAds\\CampaignMangagement\\InMarketAudience',
      'ProductAudience' => 'PMG\\BingAds\\CampaignMangagement\\ProductAudience',
      'AddAudiencesResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddAudiencesResponse',
      'UpdateAudiencesRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAudiencesRequest',
      'UpdateAudiencesResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateAudiencesResponse',
      'DeleteAudiencesRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAudiencesRequest',
      'DeleteAudiencesResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteAudiencesResponse',
      'GetAudiencesByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetAudiencesByIdsRequest',
      'GetAudiencesByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetAudiencesByIdsResponse',
      'GetUetTagsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetUetTagsByIdsRequest',
      'GetUetTagsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetUetTagsByIdsResponse',
      'ArrayOfUetTag' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfUetTag',
      'UetTag' => 'PMG\\BingAds\\CampaignMangagement\\UetTag',
      'AddUetTagsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddUetTagsRequest',
      'AddUetTagsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddUetTagsResponse',
      'UpdateUetTagsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateUetTagsRequest',
      'UpdateUetTagsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateUetTagsResponse',
      'GetConversionGoalsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetConversionGoalsByIdsRequest',
      'GetConversionGoalsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetConversionGoalsByIdsResponse',
      'ArrayOfConversionGoal' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfConversionGoal',
      'ConversionGoal' => 'PMG\\BingAds\\CampaignMangagement\\ConversionGoal',
      'ConversionGoalRevenue' => 'PMG\\BingAds\\CampaignMangagement\\ConversionGoalRevenue',
      'UrlGoal' => 'PMG\\BingAds\\CampaignMangagement\\UrlGoal',
      'DurationGoal' => 'PMG\\BingAds\\CampaignMangagement\\DurationGoal',
      'PagesViewedPerVisitGoal' => 'PMG\\BingAds\\CampaignMangagement\\PagesViewedPerVisitGoal',
      'EventGoal' => 'PMG\\BingAds\\CampaignMangagement\\EventGoal',
      'AppInstallGoal' => 'PMG\\BingAds\\CampaignMangagement\\AppInstallGoal',
      'OfflineConversionGoal' => 'PMG\\BingAds\\CampaignMangagement\\OfflineConversionGoal',
      'InStoreTransactionGoal' => 'PMG\\BingAds\\CampaignMangagement\\InStoreTransactionGoal',
      'GetConversionGoalsByTagIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetConversionGoalsByTagIdsRequest',
      'GetConversionGoalsByTagIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetConversionGoalsByTagIdsResponse',
      'AddConversionGoalsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddConversionGoalsRequest',
      'AddConversionGoalsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddConversionGoalsResponse',
      'UpdateConversionGoalsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateConversionGoalsRequest',
      'UpdateConversionGoalsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateConversionGoalsResponse',
      'ApplyOfflineConversionsRequest' => 'PMG\\BingAds\\CampaignMangagement\\ApplyOfflineConversionsRequest',
      'ArrayOfOfflineConversion' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfOfflineConversion',
      'OfflineConversion' => 'PMG\\BingAds\\CampaignMangagement\\OfflineConversion',
      'ApplyOfflineConversionsResponse' => 'PMG\\BingAds\\CampaignMangagement\\ApplyOfflineConversionsResponse',
      'AddLabelsRequest' => 'PMG\\BingAds\\CampaignMangagement\\AddLabelsRequest',
      'ArrayOfLabel' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfLabel',
      'Label' => 'PMG\\BingAds\\CampaignMangagement\\Label',
      'AddLabelsResponse' => 'PMG\\BingAds\\CampaignMangagement\\AddLabelsResponse',
      'DeleteLabelsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteLabelsRequest',
      'DeleteLabelsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteLabelsResponse',
      'UpdateLabelsRequest' => 'PMG\\BingAds\\CampaignMangagement\\UpdateLabelsRequest',
      'UpdateLabelsResponse' => 'PMG\\BingAds\\CampaignMangagement\\UpdateLabelsResponse',
      'GetLabelsByIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelsByIdsRequest',
      'Paging' => 'PMG\\BingAds\\CampaignMangagement\\Paging',
      'GetLabelsByIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelsByIdsResponse',
      'SetLabelAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\SetLabelAssociationsRequest',
      'ArrayOfLabelAssociation' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfLabelAssociation',
      'LabelAssociation' => 'PMG\\BingAds\\CampaignMangagement\\LabelAssociation',
      'SetLabelAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\SetLabelAssociationsResponse',
      'DeleteLabelAssociationsRequest' => 'PMG\\BingAds\\CampaignMangagement\\DeleteLabelAssociationsRequest',
      'DeleteLabelAssociationsResponse' => 'PMG\\BingAds\\CampaignMangagement\\DeleteLabelAssociationsResponse',
      'GetLabelAssociationsByEntityIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelAssociationsByEntityIdsRequest',
      'GetLabelAssociationsByEntityIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelAssociationsByEntityIdsResponse',
      'GetLabelAssociationsByLabelIdsRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelAssociationsByLabelIdsRequest',
      'GetLabelAssociationsByLabelIdsResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetLabelAssociationsByLabelIdsResponse',
      'GetProfileDataFileUrlRequest' => 'PMG\\BingAds\\CampaignMangagement\\GetProfileDataFileUrlRequest',
      'GetProfileDataFileUrlResponse' => 'PMG\\BingAds\\CampaignMangagement\\GetProfileDataFileUrlResponse',
      'ArrayOfstring' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfstring',
      'ArrayOfKeyValueOfstringstring' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfKeyValueOfstringstring',
      'KeyValueOfstringstring' => 'PMG\\BingAds\\CampaignMangagement\\KeyValueOfstringstring',
      'ArrayOflong' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOflong',
      'ArrayOfKeyValuePairOfstringstring' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfKeyValuePairOfstringstring',
      'KeyValuePairOfstringstring' => 'PMG\\BingAds\\CampaignMangagement\\KeyValuePairOfstringstring',
      'ArrayOfNullableOflong' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfNullableOflong',
      'AdApiFaultDetail' => 'PMG\\BingAds\\CampaignMangagement\\AdApiFaultDetail',
      'ApplicationFault' => 'PMG\\BingAds\\CampaignMangagement\\ApplicationFault',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\CampaignMangagement\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\CampaignMangagement\\AdApiError',
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
     * @param AddCampaignsRequest $parameters
     * @return AddCampaignsResponse
     */
    public function AddCampaigns(AddCampaignsRequest $parameters)
    {
      return $this->__soapCall("AddCampaigns", array($parameters));
    }

    /**
     * @param GetCampaignsByAccountIdRequest $parameters
     * @return GetCampaignsByAccountIdResponse
     */
    public function GetCampaignsByAccountId(GetCampaignsByAccountIdRequest $parameters)
    {
      return $this->__soapCall("GetCampaignsByAccountId", array($parameters));
    }

    /**
     * @param GetCampaignsByIdsRequest $parameters
     * @return GetCampaignsByIdsResponse
     */
    public function GetCampaignsByIds(GetCampaignsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetCampaignsByIds", array($parameters));
    }

    /**
     * @param DeleteCampaignsRequest $parameters
     * @return DeleteCampaignsResponse
     */
    public function DeleteCampaigns(DeleteCampaignsRequest $parameters)
    {
      return $this->__soapCall("DeleteCampaigns", array($parameters));
    }

    /**
     * @param UpdateCampaignsRequest $parameters
     * @return UpdateCampaignsResponse
     */
    public function UpdateCampaigns(UpdateCampaignsRequest $parameters)
    {
      return $this->__soapCall("UpdateCampaigns", array($parameters));
    }

    /**
     * @param GetNegativeSitesByCampaignIdsRequest $parameters
     * @return GetNegativeSitesByCampaignIdsResponse
     */
    public function GetNegativeSitesByCampaignIds(GetNegativeSitesByCampaignIdsRequest $parameters)
    {
      return $this->__soapCall("GetNegativeSitesByCampaignIds", array($parameters));
    }

    /**
     * @param SetNegativeSitesToCampaignsRequest $parameters
     * @return SetNegativeSitesToCampaignsResponse
     */
    public function SetNegativeSitesToCampaigns(SetNegativeSitesToCampaignsRequest $parameters)
    {
      return $this->__soapCall("SetNegativeSitesToCampaigns", array($parameters));
    }

    /**
     * @param GetConfigValueRequest $parameters
     * @return GetConfigValueResponse
     */
    public function GetConfigValue(GetConfigValueRequest $parameters)
    {
      return $this->__soapCall("GetConfigValue", array($parameters));
    }

    /**
     * @param GetBSCCountriesRequest $parameters
     * @return GetBSCCountriesResponse
     */
    public function GetBSCCountries(GetBSCCountriesRequest $parameters)
    {
      return $this->__soapCall("GetBSCCountries", array($parameters));
    }

    /**
     * @param AddAdGroupsRequest $parameters
     * @return AddAdGroupsResponse
     */
    public function AddAdGroups(AddAdGroupsRequest $parameters)
    {
      return $this->__soapCall("AddAdGroups", array($parameters));
    }

    /**
     * @param DeleteAdGroupsRequest $parameters
     * @return DeleteAdGroupsResponse
     */
    public function DeleteAdGroups(DeleteAdGroupsRequest $parameters)
    {
      return $this->__soapCall("DeleteAdGroups", array($parameters));
    }

    /**
     * @param GetAdGroupsByIdsRequest $parameters
     * @return GetAdGroupsByIdsResponse
     */
    public function GetAdGroupsByIds(GetAdGroupsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetAdGroupsByIds", array($parameters));
    }

    /**
     * @param GetAdGroupsByCampaignIdRequest $parameters
     * @return GetAdGroupsByCampaignIdResponse
     */
    public function GetAdGroupsByCampaignId(GetAdGroupsByCampaignIdRequest $parameters)
    {
      return $this->__soapCall("GetAdGroupsByCampaignId", array($parameters));
    }

    /**
     * @param UpdateAdGroupsRequest $parameters
     * @return UpdateAdGroupsResponse
     */
    public function UpdateAdGroups(UpdateAdGroupsRequest $parameters)
    {
      return $this->__soapCall("UpdateAdGroups", array($parameters));
    }

    /**
     * @param GetNegativeSitesByAdGroupIdsRequest $parameters
     * @return GetNegativeSitesByAdGroupIdsResponse
     */
    public function GetNegativeSitesByAdGroupIds(GetNegativeSitesByAdGroupIdsRequest $parameters)
    {
      return $this->__soapCall("GetNegativeSitesByAdGroupIds", array($parameters));
    }

    /**
     * @param SetNegativeSitesToAdGroupsRequest $parameters
     * @return SetNegativeSitesToAdGroupsResponse
     */
    public function SetNegativeSitesToAdGroups(SetNegativeSitesToAdGroupsRequest $parameters)
    {
      return $this->__soapCall("SetNegativeSitesToAdGroups", array($parameters));
    }

    /**
     * @param GetGeoLocationsFileUrlRequest $parameters
     * @return GetGeoLocationsFileUrlResponse
     */
    public function GetGeoLocationsFileUrl(GetGeoLocationsFileUrlRequest $parameters)
    {
      return $this->__soapCall("GetGeoLocationsFileUrl", array($parameters));
    }

    /**
     * @param AddAdsRequest $parameters
     * @return AddAdsResponse
     */
    public function AddAds(AddAdsRequest $parameters)
    {
      return $this->__soapCall("AddAds", array($parameters));
    }

    /**
     * @param DeleteAdsRequest $parameters
     * @return DeleteAdsResponse
     */
    public function DeleteAds(DeleteAdsRequest $parameters)
    {
      return $this->__soapCall("DeleteAds", array($parameters));
    }

    /**
     * @param GetAdsByEditorialStatusRequest $parameters
     * @return GetAdsByEditorialStatusResponse
     */
    public function GetAdsByEditorialStatus(GetAdsByEditorialStatusRequest $parameters)
    {
      return $this->__soapCall("GetAdsByEditorialStatus", array($parameters));
    }

    /**
     * @param GetAdsByIdsRequest $parameters
     * @return GetAdsByIdsResponse
     */
    public function GetAdsByIds(GetAdsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetAdsByIds", array($parameters));
    }

    /**
     * @param GetAdsByAdGroupIdRequest $parameters
     * @return GetAdsByAdGroupIdResponse
     */
    public function GetAdsByAdGroupId(GetAdsByAdGroupIdRequest $parameters)
    {
      return $this->__soapCall("GetAdsByAdGroupId", array($parameters));
    }

    /**
     * @param UpdateAdsRequest $parameters
     * @return UpdateAdsResponse
     */
    public function UpdateAds(UpdateAdsRequest $parameters)
    {
      return $this->__soapCall("UpdateAds", array($parameters));
    }

    /**
     * @param AddKeywordsRequest $parameters
     * @return AddKeywordsResponse
     */
    public function AddKeywords(AddKeywordsRequest $parameters)
    {
      return $this->__soapCall("AddKeywords", array($parameters));
    }

    /**
     * @param DeleteKeywordsRequest $parameters
     * @return DeleteKeywordsResponse
     */
    public function DeleteKeywords(DeleteKeywordsRequest $parameters)
    {
      return $this->__soapCall("DeleteKeywords", array($parameters));
    }

    /**
     * @param GetKeywordsByEditorialStatusRequest $parameters
     * @return GetKeywordsByEditorialStatusResponse
     */
    public function GetKeywordsByEditorialStatus(GetKeywordsByEditorialStatusRequest $parameters)
    {
      return $this->__soapCall("GetKeywordsByEditorialStatus", array($parameters));
    }

    /**
     * @param GetKeywordsByIdsRequest $parameters
     * @return GetKeywordsByIdsResponse
     */
    public function GetKeywordsByIds(GetKeywordsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetKeywordsByIds", array($parameters));
    }

    /**
     * @param GetKeywordsByAdGroupIdRequest $parameters
     * @return GetKeywordsByAdGroupIdResponse
     */
    public function GetKeywordsByAdGroupId(GetKeywordsByAdGroupIdRequest $parameters)
    {
      return $this->__soapCall("GetKeywordsByAdGroupId", array($parameters));
    }

    /**
     * @param UpdateKeywordsRequest $parameters
     * @return UpdateKeywordsResponse
     */
    public function UpdateKeywords(UpdateKeywordsRequest $parameters)
    {
      return $this->__soapCall("UpdateKeywords", array($parameters));
    }

    /**
     * @param AppealEditorialRejectionsRequest $parameters
     * @return AppealEditorialRejectionsResponse
     */
    public function AppealEditorialRejections(AppealEditorialRejectionsRequest $parameters)
    {
      return $this->__soapCall("AppealEditorialRejections", array($parameters));
    }

    /**
     * @param GetEditorialReasonsByIdsRequest $parameters
     * @return GetEditorialReasonsByIdsResponse
     */
    public function GetEditorialReasonsByIds(GetEditorialReasonsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetEditorialReasonsByIds", array($parameters));
    }

    /**
     * @param GetAccountMigrationStatusesRequest $parameters
     * @return GetAccountMigrationStatusesResponse
     */
    public function GetAccountMigrationStatuses(GetAccountMigrationStatusesRequest $parameters)
    {
      return $this->__soapCall("GetAccountMigrationStatuses", array($parameters));
    }

    /**
     * @param SetAccountPropertiesRequest $parameters
     * @return SetAccountPropertiesResponse
     */
    public function SetAccountProperties(SetAccountPropertiesRequest $parameters)
    {
      return $this->__soapCall("SetAccountProperties", array($parameters));
    }

    /**
     * @param GetAccountPropertiesRequest $parameters
     * @return GetAccountPropertiesResponse
     */
    public function GetAccountProperties(GetAccountPropertiesRequest $parameters)
    {
      return $this->__soapCall("GetAccountProperties", array($parameters));
    }

    /**
     * @param AddAdExtensionsRequest $parameters
     * @return AddAdExtensionsResponse
     */
    public function AddAdExtensions(AddAdExtensionsRequest $parameters)
    {
      return $this->__soapCall("AddAdExtensions", array($parameters));
    }

    /**
     * @param GetAdExtensionsByIdsRequest $parameters
     * @return GetAdExtensionsByIdsResponse
     */
    public function GetAdExtensionsByIds(GetAdExtensionsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetAdExtensionsByIds", array($parameters));
    }

    /**
     * @param UpdateAdExtensionsRequest $parameters
     * @return UpdateAdExtensionsResponse
     */
    public function UpdateAdExtensions(UpdateAdExtensionsRequest $parameters)
    {
      return $this->__soapCall("UpdateAdExtensions", array($parameters));
    }

    /**
     * @param DeleteAdExtensionsRequest $parameters
     * @return DeleteAdExtensionsResponse
     */
    public function DeleteAdExtensions(DeleteAdExtensionsRequest $parameters)
    {
      return $this->__soapCall("DeleteAdExtensions", array($parameters));
    }

    /**
     * @param GetAdExtensionsEditorialReasonsRequest $parameters
     * @return GetAdExtensionsEditorialReasonsResponse
     */
    public function GetAdExtensionsEditorialReasons(GetAdExtensionsEditorialReasonsRequest $parameters)
    {
      return $this->__soapCall("GetAdExtensionsEditorialReasons", array($parameters));
    }

    /**
     * @param SetAdExtensionsAssociationsRequest $parameters
     * @return SetAdExtensionsAssociationsResponse
     */
    public function SetAdExtensionsAssociations(SetAdExtensionsAssociationsRequest $parameters)
    {
      return $this->__soapCall("SetAdExtensionsAssociations", array($parameters));
    }

    /**
     * @param GetAdExtensionsAssociationsRequest $parameters
     * @return GetAdExtensionsAssociationsResponse
     */
    public function GetAdExtensionsAssociations(GetAdExtensionsAssociationsRequest $parameters)
    {
      return $this->__soapCall("GetAdExtensionsAssociations", array($parameters));
    }

    /**
     * @param DeleteAdExtensionsAssociationsRequest $parameters
     * @return DeleteAdExtensionsAssociationsResponse
     */
    public function DeleteAdExtensionsAssociations(DeleteAdExtensionsAssociationsRequest $parameters)
    {
      return $this->__soapCall("DeleteAdExtensionsAssociations", array($parameters));
    }

    /**
     * @param GetAdExtensionIdsByAccountIdRequest $parameters
     * @return GetAdExtensionIdsByAccountIdResponse
     */
    public function GetAdExtensionIdsByAccountId(GetAdExtensionIdsByAccountIdRequest $parameters)
    {
      return $this->__soapCall("GetAdExtensionIdsByAccountId", array($parameters));
    }

    /**
     * @param AddMediaRequest $parameters
     * @return AddMediaResponse
     */
    public function AddMedia(AddMediaRequest $parameters)
    {
      return $this->__soapCall("AddMedia", array($parameters));
    }

    /**
     * @param DeleteMediaRequest $parameters
     * @return DeleteMediaResponse
     */
    public function DeleteMedia(DeleteMediaRequest $parameters)
    {
      return $this->__soapCall("DeleteMedia", array($parameters));
    }

    /**
     * @param GetMediaMetaDataByAccountIdRequest $parameters
     * @return GetMediaMetaDataByAccountIdResponse
     */
    public function GetMediaMetaDataByAccountId(GetMediaMetaDataByAccountIdRequest $parameters)
    {
      return $this->__soapCall("GetMediaMetaDataByAccountId", array($parameters));
    }

    /**
     * @param GetMediaMetaDataByIdsRequest $parameters
     * @return GetMediaMetaDataByIdsResponse
     */
    public function GetMediaMetaDataByIds(GetMediaMetaDataByIdsRequest $parameters)
    {
      return $this->__soapCall("GetMediaMetaDataByIds", array($parameters));
    }

    /**
     * @param GetMediaAssociationsRequest $parameters
     * @return GetMediaAssociationsResponse
     */
    public function GetMediaAssociations(GetMediaAssociationsRequest $parameters)
    {
      return $this->__soapCall("GetMediaAssociations", array($parameters));
    }

    /**
     * @param GetAdGroupCriterionsByIdsRequest $parameters
     * @return GetAdGroupCriterionsByIdsResponse
     */
    public function GetAdGroupCriterionsByIds(GetAdGroupCriterionsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetAdGroupCriterionsByIds", array($parameters));
    }

    /**
     * @param AddAdGroupCriterionsRequest $parameters
     * @return AddAdGroupCriterionsResponse
     */
    public function AddAdGroupCriterions(AddAdGroupCriterionsRequest $parameters)
    {
      return $this->__soapCall("AddAdGroupCriterions", array($parameters));
    }

    /**
     * @param UpdateAdGroupCriterionsRequest $parameters
     * @return UpdateAdGroupCriterionsResponse
     */
    public function UpdateAdGroupCriterions(UpdateAdGroupCriterionsRequest $parameters)
    {
      return $this->__soapCall("UpdateAdGroupCriterions", array($parameters));
    }

    /**
     * @param DeleteAdGroupCriterionsRequest $parameters
     * @return DeleteAdGroupCriterionsResponse
     */
    public function DeleteAdGroupCriterions(DeleteAdGroupCriterionsRequest $parameters)
    {
      return $this->__soapCall("DeleteAdGroupCriterions", array($parameters));
    }

    /**
     * @param ApplyProductPartitionActionsRequest $parameters
     * @return ApplyProductPartitionActionsResponse
     */
    public function ApplyProductPartitionActions(ApplyProductPartitionActionsRequest $parameters)
    {
      return $this->__soapCall("ApplyProductPartitionActions", array($parameters));
    }

    /**
     * @param GetBMCStoresByCustomerIdRequest $parameters
     * @return GetBMCStoresByCustomerIdResponse
     */
    public function GetBMCStoresByCustomerId(GetBMCStoresByCustomerIdRequest $parameters)
    {
      return $this->__soapCall("GetBMCStoresByCustomerId", array($parameters));
    }

    /**
     * @param AddNegativeKeywordsToEntitiesRequest $parameters
     * @return AddNegativeKeywordsToEntitiesResponse
     */
    public function AddNegativeKeywordsToEntities(AddNegativeKeywordsToEntitiesRequest $parameters)
    {
      return $this->__soapCall("AddNegativeKeywordsToEntities", array($parameters));
    }

    /**
     * @param GetNegativeKeywordsByEntityIdsRequest $parameters
     * @return GetNegativeKeywordsByEntityIdsResponse
     */
    public function GetNegativeKeywordsByEntityIds(GetNegativeKeywordsByEntityIdsRequest $parameters)
    {
      return $this->__soapCall("GetNegativeKeywordsByEntityIds", array($parameters));
    }

    /**
     * @param DeleteNegativeKeywordsFromEntitiesRequest $parameters
     * @return DeleteNegativeKeywordsFromEntitiesResponse
     */
    public function DeleteNegativeKeywordsFromEntities(DeleteNegativeKeywordsFromEntitiesRequest $parameters)
    {
      return $this->__soapCall("DeleteNegativeKeywordsFromEntities", array($parameters));
    }

    /**
     * @param GetSharedEntitiesByAccountIdRequest $parameters
     * @return GetSharedEntitiesByAccountIdResponse
     */
    public function GetSharedEntitiesByAccountId(GetSharedEntitiesByAccountIdRequest $parameters)
    {
      return $this->__soapCall("GetSharedEntitiesByAccountId", array($parameters));
    }

    /**
     * @param AddSharedEntityRequest $parameters
     * @return AddSharedEntityResponse
     */
    public function AddSharedEntity(AddSharedEntityRequest $parameters)
    {
      return $this->__soapCall("AddSharedEntity", array($parameters));
    }

    /**
     * @param GetListItemsBySharedListRequest $parameters
     * @return GetListItemsBySharedListResponse
     */
    public function GetListItemsBySharedList(GetListItemsBySharedListRequest $parameters)
    {
      return $this->__soapCall("GetListItemsBySharedList", array($parameters));
    }

    /**
     * @param AddListItemsToSharedListRequest $parameters
     * @return AddListItemsToSharedListResponse
     */
    public function AddListItemsToSharedList(AddListItemsToSharedListRequest $parameters)
    {
      return $this->__soapCall("AddListItemsToSharedList", array($parameters));
    }

    /**
     * @param UpdateSharedEntitiesRequest $parameters
     * @return UpdateSharedEntitiesResponse
     */
    public function UpdateSharedEntities(UpdateSharedEntitiesRequest $parameters)
    {
      return $this->__soapCall("UpdateSharedEntities", array($parameters));
    }

    /**
     * @param DeleteListItemsFromSharedListRequest $parameters
     * @return DeleteListItemsFromSharedListResponse
     */
    public function DeleteListItemsFromSharedList(DeleteListItemsFromSharedListRequest $parameters)
    {
      return $this->__soapCall("DeleteListItemsFromSharedList", array($parameters));
    }

    /**
     * @param SetSharedEntityAssociationsRequest $parameters
     * @return SetSharedEntityAssociationsResponse
     */
    public function SetSharedEntityAssociations(SetSharedEntityAssociationsRequest $parameters)
    {
      return $this->__soapCall("SetSharedEntityAssociations", array($parameters));
    }

    /**
     * @param DeleteSharedEntityAssociationsRequest $parameters
     * @return DeleteSharedEntityAssociationsResponse
     */
    public function DeleteSharedEntityAssociations(DeleteSharedEntityAssociationsRequest $parameters)
    {
      return $this->__soapCall("DeleteSharedEntityAssociations", array($parameters));
    }

    /**
     * @param GetSharedEntityAssociationsBySharedEntityIdsRequest $parameters
     * @return GetSharedEntityAssociationsBySharedEntityIdsResponse
     */
    public function GetSharedEntityAssociationsBySharedEntityIds(GetSharedEntityAssociationsBySharedEntityIdsRequest $parameters)
    {
      return $this->__soapCall("GetSharedEntityAssociationsBySharedEntityIds", array($parameters));
    }

    /**
     * @param GetSharedEntityAssociationsByEntityIdsRequest $parameters
     * @return GetSharedEntityAssociationsByEntityIdsResponse
     */
    public function GetSharedEntityAssociationsByEntityIds(GetSharedEntityAssociationsByEntityIdsRequest $parameters)
    {
      return $this->__soapCall("GetSharedEntityAssociationsByEntityIds", array($parameters));
    }

    /**
     * @param DeleteSharedEntitiesRequest $parameters
     * @return DeleteSharedEntitiesResponse
     */
    public function DeleteSharedEntities(DeleteSharedEntitiesRequest $parameters)
    {
      return $this->__soapCall("DeleteSharedEntities", array($parameters));
    }

    /**
     * @param GetCampaignSizesByAccountIdRequest $parameters
     * @return GetCampaignSizesByAccountIdResponse
     */
    public function GetCampaignSizesByAccountId(GetCampaignSizesByAccountIdRequest $parameters)
    {
      return $this->__soapCall("GetCampaignSizesByAccountId", array($parameters));
    }

    /**
     * @param AddCampaignCriterionsRequest $parameters
     * @return AddCampaignCriterionsResponse
     */
    public function AddCampaignCriterions(AddCampaignCriterionsRequest $parameters)
    {
      return $this->__soapCall("AddCampaignCriterions", array($parameters));
    }

    /**
     * @param UpdateCampaignCriterionsRequest $parameters
     * @return UpdateCampaignCriterionsResponse
     */
    public function UpdateCampaignCriterions(UpdateCampaignCriterionsRequest $parameters)
    {
      return $this->__soapCall("UpdateCampaignCriterions", array($parameters));
    }

    /**
     * @param DeleteCampaignCriterionsRequest $parameters
     * @return DeleteCampaignCriterionsResponse
     */
    public function DeleteCampaignCriterions(DeleteCampaignCriterionsRequest $parameters)
    {
      return $this->__soapCall("DeleteCampaignCriterions", array($parameters));
    }

    /**
     * @param GetCampaignCriterionsByIdsRequest $parameters
     * @return GetCampaignCriterionsByIdsResponse
     */
    public function GetCampaignCriterionsByIds(GetCampaignCriterionsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetCampaignCriterionsByIds", array($parameters));
    }

    /**
     * @param AddBudgetsRequest $parameters
     * @return AddBudgetsResponse
     */
    public function AddBudgets(AddBudgetsRequest $parameters)
    {
      return $this->__soapCall("AddBudgets", array($parameters));
    }

    /**
     * @param UpdateBudgetsRequest $parameters
     * @return UpdateBudgetsResponse
     */
    public function UpdateBudgets(UpdateBudgetsRequest $parameters)
    {
      return $this->__soapCall("UpdateBudgets", array($parameters));
    }

    /**
     * @param DeleteBudgetsRequest $parameters
     * @return DeleteBudgetsResponse
     */
    public function DeleteBudgets(DeleteBudgetsRequest $parameters)
    {
      return $this->__soapCall("DeleteBudgets", array($parameters));
    }

    /**
     * @param GetBudgetsByIdsRequest $parameters
     * @return GetBudgetsByIdsResponse
     */
    public function GetBudgetsByIds(GetBudgetsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetBudgetsByIds", array($parameters));
    }

    /**
     * @param GetCampaignIdsByBudgetIdsRequest $parameters
     * @return GetCampaignIdsByBudgetIdsResponse
     */
    public function GetCampaignIdsByBudgetIds(GetCampaignIdsByBudgetIdsRequest $parameters)
    {
      return $this->__soapCall("GetCampaignIdsByBudgetIds", array($parameters));
    }

    /**
     * @param AddAudiencesRequest $parameters
     * @return AddAudiencesResponse
     */
    public function AddAudiences(AddAudiencesRequest $parameters)
    {
      return $this->__soapCall("AddAudiences", array($parameters));
    }

    /**
     * @param UpdateAudiencesRequest $parameters
     * @return UpdateAudiencesResponse
     */
    public function UpdateAudiences(UpdateAudiencesRequest $parameters)
    {
      return $this->__soapCall("UpdateAudiences", array($parameters));
    }

    /**
     * @param DeleteAudiencesRequest $parameters
     * @return DeleteAudiencesResponse
     */
    public function DeleteAudiences(DeleteAudiencesRequest $parameters)
    {
      return $this->__soapCall("DeleteAudiences", array($parameters));
    }

    /**
     * @param GetAudiencesByIdsRequest $parameters
     * @return GetAudiencesByIdsResponse
     */
    public function GetAudiencesByIds(GetAudiencesByIdsRequest $parameters)
    {
      return $this->__soapCall("GetAudiencesByIds", array($parameters));
    }

    /**
     * @param GetUetTagsByIdsRequest $parameters
     * @return GetUetTagsByIdsResponse
     */
    public function GetUetTagsByIds(GetUetTagsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetUetTagsByIds", array($parameters));
    }

    /**
     * @param AddUetTagsRequest $parameters
     * @return AddUetTagsResponse
     */
    public function AddUetTags(AddUetTagsRequest $parameters)
    {
      return $this->__soapCall("AddUetTags", array($parameters));
    }

    /**
     * @param UpdateUetTagsRequest $parameters
     * @return UpdateUetTagsResponse
     */
    public function UpdateUetTags(UpdateUetTagsRequest $parameters)
    {
      return $this->__soapCall("UpdateUetTags", array($parameters));
    }

    /**
     * @param GetConversionGoalsByIdsRequest $parameters
     * @return GetConversionGoalsByIdsResponse
     */
    public function GetConversionGoalsByIds(GetConversionGoalsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetConversionGoalsByIds", array($parameters));
    }

    /**
     * @param GetConversionGoalsByTagIdsRequest $parameters
     * @return GetConversionGoalsByTagIdsResponse
     */
    public function GetConversionGoalsByTagIds(GetConversionGoalsByTagIdsRequest $parameters)
    {
      return $this->__soapCall("GetConversionGoalsByTagIds", array($parameters));
    }

    /**
     * @param AddConversionGoalsRequest $parameters
     * @return AddConversionGoalsResponse
     */
    public function AddConversionGoals(AddConversionGoalsRequest $parameters)
    {
      return $this->__soapCall("AddConversionGoals", array($parameters));
    }

    /**
     * @param UpdateConversionGoalsRequest $parameters
     * @return UpdateConversionGoalsResponse
     */
    public function UpdateConversionGoals(UpdateConversionGoalsRequest $parameters)
    {
      return $this->__soapCall("UpdateConversionGoals", array($parameters));
    }

    /**
     * @param ApplyOfflineConversionsRequest $parameters
     * @return ApplyOfflineConversionsResponse
     */
    public function ApplyOfflineConversions(ApplyOfflineConversionsRequest $parameters)
    {
      return $this->__soapCall("ApplyOfflineConversions", array($parameters));
    }

    /**
     * @param AddLabelsRequest $parameters
     * @return AddLabelsResponse
     */
    public function AddLabels(AddLabelsRequest $parameters)
    {
      return $this->__soapCall("AddLabels", array($parameters));
    }

    /**
     * @param DeleteLabelsRequest $parameters
     * @return DeleteLabelsResponse
     */
    public function DeleteLabels(DeleteLabelsRequest $parameters)
    {
      return $this->__soapCall("DeleteLabels", array($parameters));
    }

    /**
     * @param UpdateLabelsRequest $parameters
     * @return UpdateLabelsResponse
     */
    public function UpdateLabels(UpdateLabelsRequest $parameters)
    {
      return $this->__soapCall("UpdateLabels", array($parameters));
    }

    /**
     * @param GetLabelsByIdsRequest $parameters
     * @return GetLabelsByIdsResponse
     */
    public function GetLabelsByIds(GetLabelsByIdsRequest $parameters)
    {
      return $this->__soapCall("GetLabelsByIds", array($parameters));
    }

    /**
     * @param SetLabelAssociationsRequest $parameters
     * @return SetLabelAssociationsResponse
     */
    public function SetLabelAssociations(SetLabelAssociationsRequest $parameters)
    {
      return $this->__soapCall("SetLabelAssociations", array($parameters));
    }

    /**
     * @param DeleteLabelAssociationsRequest $parameters
     * @return DeleteLabelAssociationsResponse
     */
    public function DeleteLabelAssociations(DeleteLabelAssociationsRequest $parameters)
    {
      return $this->__soapCall("DeleteLabelAssociations", array($parameters));
    }

    /**
     * @param GetLabelAssociationsByEntityIdsRequest $parameters
     * @return GetLabelAssociationsByEntityIdsResponse
     */
    public function GetLabelAssociationsByEntityIds(GetLabelAssociationsByEntityIdsRequest $parameters)
    {
      return $this->__soapCall("GetLabelAssociationsByEntityIds", array($parameters));
    }

    /**
     * @param GetLabelAssociationsByLabelIdsRequest $parameters
     * @return GetLabelAssociationsByLabelIdsResponse
     */
    public function GetLabelAssociationsByLabelIds(GetLabelAssociationsByLabelIdsRequest $parameters)
    {
      return $this->__soapCall("GetLabelAssociationsByLabelIds", array($parameters));
    }

    /**
     * @param GetProfileDataFileUrlRequest $parameters
     * @return GetProfileDataFileUrlResponse
     */
    public function GetProfileDataFileUrl(GetProfileDataFileUrlRequest $parameters)
    {
      return $this->__soapCall("GetProfileDataFileUrl", array($parameters));
    }

}
