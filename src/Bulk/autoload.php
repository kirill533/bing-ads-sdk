<?php


 function autoload_0a64b71523b3c97fbed9146d5b338dab($class)
{
    $classes = array(
        'PMG\BingAds\Bulk\BulkService' => __DIR__ .'/BulkService.php',
        'PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsRequest' => __DIR__ .'/DownloadCampaignsByAccountIdsRequest.php',
        'PMG\BingAds\Bulk\CompressionType' => __DIR__ .'/CompressionType.php',
        'PMG\BingAds\Bulk\DataScope' => __DIR__ .'/DataScope.php',
        'PMG\BingAds\Bulk\ArrayOfDownloadEntity' => __DIR__ .'/ArrayOfDownloadEntity.php',
        'PMG\BingAds\Bulk\DownloadEntity' => __DIR__ .'/DownloadEntity.php',
        'PMG\BingAds\Bulk\DownloadFileType' => __DIR__ .'/DownloadFileType.php',
        'PMG\BingAds\Bulk\PerformanceStatsDateRange' => __DIR__ .'/PerformanceStatsDateRange.php',
        'PMG\BingAds\Bulk\Date' => __DIR__ .'/Date.php',
        'PMG\BingAds\Bulk\ReportTimePeriod' => __DIR__ .'/ReportTimePeriod.php',
        'PMG\BingAds\Bulk\DownloadCampaignsByAccountIdsResponse' => __DIR__ .'/DownloadCampaignsByAccountIdsResponse.php',
        'PMG\BingAds\Bulk\ApiFault' => __DIR__ .'/ApiFault.php',
        'PMG\BingAds\Bulk\ArrayOfBatchError' => __DIR__ .'/ArrayOfBatchError.php',
        'PMG\BingAds\Bulk\BatchError' => __DIR__ .'/BatchError.php',
        'PMG\BingAds\Bulk\EditorialError' => __DIR__ .'/EditorialError.php',
        'PMG\BingAds\Bulk\ArrayOfOperationError' => __DIR__ .'/ArrayOfOperationError.php',
        'PMG\BingAds\Bulk\OperationError' => __DIR__ .'/OperationError.php',
        'PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsRequest' => __DIR__ .'/DownloadCampaignsByCampaignIdsRequest.php',
        'PMG\BingAds\Bulk\ArrayOfCampaignScope' => __DIR__ .'/ArrayOfCampaignScope.php',
        'PMG\BingAds\Bulk\CampaignScope' => __DIR__ .'/CampaignScope.php',
        'PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsResponse' => __DIR__ .'/DownloadCampaignsByCampaignIdsResponse.php',
        'PMG\BingAds\Bulk\GetBulkDownloadStatusRequest' => __DIR__ .'/GetBulkDownloadStatusRequest.php',
        'PMG\BingAds\Bulk\GetBulkDownloadStatusResponse' => __DIR__ .'/GetBulkDownloadStatusResponse.php',
        'PMG\BingAds\Bulk\GetBulkUploadUrlRequest' => __DIR__ .'/GetBulkUploadUrlRequest.php',
        'PMG\BingAds\Bulk\ResponseMode' => __DIR__ .'/ResponseMode.php',
        'PMG\BingAds\Bulk\GetBulkUploadUrlResponse' => __DIR__ .'/GetBulkUploadUrlResponse.php',
        'PMG\BingAds\Bulk\GetBulkUploadStatusRequest' => __DIR__ .'/GetBulkUploadStatusRequest.php',
        'PMG\BingAds\Bulk\GetBulkUploadStatusResponse' => __DIR__ .'/GetBulkUploadStatusResponse.php',
        'PMG\BingAds\Bulk\ArrayOflong' => __DIR__ .'/ArrayOflong.php',
        'PMG\BingAds\Bulk\ArrayOfKeyValueOfstringstring' => __DIR__ .'/ArrayOfKeyValueOfstringstring.php',
        'PMG\BingAds\Bulk\KeyValueOfstringstring' => __DIR__ .'/KeyValueOfstringstring.php',
        'PMG\BingAds\Bulk\AdApiFault' => __DIR__ .'/AdApiFault.php',
        'PMG\BingAds\Bulk\ApplicationFault' => __DIR__ .'/ApplicationFault.php',
        'PMG\BingAds\Bulk\ArrayOfAdApiError' => __DIR__ .'/ArrayOfAdApiError.php',
        'PMG\BingAds\Bulk\AdApiError' => __DIR__ .'/AdApiError.php',
        'PMG\BingAds\Bulk\ArrayOfKeyValuePairOfstringstring' => __DIR__ .'/ArrayOfKeyValuePairOfstringstring.php',
        'PMG\BingAds\Bulk\KeyValuePairOfstringstring' => __DIR__ .'/KeyValuePairOfstringstring.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_0a64b71523b3c97fbed9146d5b338dab');

// Do nothing. The rest is just leftovers from the code generation.
{
}
