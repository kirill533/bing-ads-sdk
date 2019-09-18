<?php

namespace PMG\BingAds\Bulk;

class BulkService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/CampaignManagement/v13';
    const WSDL_PROD = 'https://bulk.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v13/BulkService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://bulk.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v13/BulkService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'DownloadCampaignsByAccountIdsRequest' => 'PMG\\BingAds\\Bulk\\DownloadCampaignsByAccountIdsRequest',
      'ArrayOfDownloadEntity' => 'PMG\\BingAds\\Bulk\\ArrayOfDownloadEntity',
      'DownloadCampaignsByAccountIdsResponse' => 'PMG\\BingAds\\Bulk\\DownloadCampaignsByAccountIdsResponse',
      'ArrayOfBatchError' => 'PMG\\BingAds\\Bulk\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\Bulk\\BatchError',
      'EditorialError' => 'PMG\\BingAds\\Bulk\\EditorialError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\Bulk\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\Bulk\\OperationError',
      'DownloadCampaignsByCampaignIdsRequest' => 'PMG\\BingAds\\Bulk\\DownloadCampaignsByCampaignIdsRequest',
      'ArrayOfCampaignScope' => 'PMG\\BingAds\\Bulk\\ArrayOfCampaignScope',
      'CampaignScope' => 'PMG\\BingAds\\Bulk\\CampaignScope',
      'DownloadCampaignsByCampaignIdsResponse' => 'PMG\\BingAds\\Bulk\\DownloadCampaignsByCampaignIdsResponse',
      'GetBulkDownloadStatusRequest' => 'PMG\\BingAds\\Bulk\\GetBulkDownloadStatusRequest',
      'GetBulkDownloadStatusResponse' => 'PMG\\BingAds\\Bulk\\GetBulkDownloadStatusResponse',
      'GetBulkUploadUrlRequest' => 'PMG\\BingAds\\Bulk\\GetBulkUploadUrlRequest',
      'GetBulkUploadUrlResponse' => 'PMG\\BingAds\\Bulk\\GetBulkUploadUrlResponse',
      'GetBulkUploadStatusRequest' => 'PMG\\BingAds\\Bulk\\GetBulkUploadStatusRequest',
      'GetBulkUploadStatusResponse' => 'PMG\\BingAds\\Bulk\\GetBulkUploadStatusResponse',
      'ArrayOflong' => 'PMG\\BingAds\\Bulk\\ArrayOflong',
      'ArrayOfKeyValueOfstringstring' => 'PMG\\BingAds\\Bulk\\ArrayOfKeyValueOfstringstring',
      'KeyValueOfstringstring' => 'PMG\\BingAds\\Bulk\\KeyValueOfstringstring',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\Bulk\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\Bulk\\AdApiError',
      'ArrayOfKeyValuePairOfstringstring' => 'PMG\\BingAds\\Bulk\\ArrayOfKeyValuePairOfstringstring',
      'KeyValuePairOfstringstring' => 'PMG\\BingAds\\Bulk\\KeyValuePairOfstringstring',
      'ApplicationFault' => 'PMG\\BingAds\\Bulk\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\Bulk\\ApiFault',
      'ApiFaultDetail' => 'PMG\\BingAds\\Bulk\\ApiFault',
      'AdApiFault' => 'PMG\\BingAds\\Bulk\\AdApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\Bulk\\AdApiFault',
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
     * @param DownloadCampaignsByAccountIdsRequest $parameters
     * @return DownloadCampaignsByAccountIdsResponse
     */
    public function downloadCampaignsByAccountIds(DownloadCampaignsByAccountIdsRequest $parameters)
    {
        return $this->__soapCall("DownloadCampaignsByAccountIds", [$parameters]);
    }

    /**
     * @param DownloadCampaignsByCampaignIdsRequest $parameters
     * @return DownloadCampaignsByCampaignIdsResponse
     */
    public function downloadCampaignsByCampaignIds(DownloadCampaignsByCampaignIdsRequest $parameters)
    {
        return $this->__soapCall("DownloadCampaignsByCampaignIds", [$parameters]);
    }

    /**
     * @param GetBulkDownloadStatusRequest $parameters
     * @return GetBulkDownloadStatusResponse
     */
    public function getBulkDownloadStatus(GetBulkDownloadStatusRequest $parameters)
    {
        return $this->__soapCall("GetBulkDownloadStatus", [$parameters]);
    }

    /**
     * @param GetBulkUploadUrlRequest $parameters
     * @return GetBulkUploadUrlResponse
     */
    public function getBulkUploadUrl(GetBulkUploadUrlRequest $parameters)
    {
        return $this->__soapCall("GetBulkUploadUrl", [$parameters]);
    }

    /**
     * @param GetBulkUploadStatusRequest $parameters
     * @return GetBulkUploadStatusResponse
     */
    public function getBulkUploadStatus(GetBulkUploadStatusRequest $parameters)
    {
        return $this->__soapCall("GetBulkUploadStatus", [$parameters]);
    }

}
