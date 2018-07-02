<?php


 function autoload_6466337499f6612541f4ee36d60d818a($class)
{
    $classes = array(
        'PMG\BingAds\CustomerBilling\CustomerBillingService' => __DIR__ .'/CustomerBillingService.php',
        'PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoRequest' => __DIR__ .'/GetBillingDocumentsInfoRequest.php',
        'PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoResponse' => __DIR__ .'/GetBillingDocumentsInfoResponse.php',
        'PMG\BingAds\CustomerBilling\GetBillingDocumentsRequest' => __DIR__ .'/GetBillingDocumentsRequest.php',
        'PMG\BingAds\CustomerBilling\GetBillingDocumentsResponse' => __DIR__ .'/GetBillingDocumentsResponse.php',
        'PMG\BingAds\CustomerBilling\AddInsertionOrderRequest' => __DIR__ .'/AddInsertionOrderRequest.php',
        'PMG\BingAds\CustomerBilling\AddInsertionOrderResponse' => __DIR__ .'/AddInsertionOrderResponse.php',
        'PMG\BingAds\CustomerBilling\UpdateInsertionOrderRequest' => __DIR__ .'/UpdateInsertionOrderRequest.php',
        'PMG\BingAds\CustomerBilling\UpdateInsertionOrderResponse' => __DIR__ .'/UpdateInsertionOrderResponse.php',
        'PMG\BingAds\CustomerBilling\GetInsertionOrdersByAccountRequest' => __DIR__ .'/GetInsertionOrdersByAccountRequest.php',
        'PMG\BingAds\CustomerBilling\GetInsertionOrdersByAccountResponse' => __DIR__ .'/GetInsertionOrdersByAccountResponse.php',
        'PMG\BingAds\CustomerBilling\SearchInsertionOrdersRequest' => __DIR__ .'/SearchInsertionOrdersRequest.php',
        'PMG\BingAds\CustomerBilling\SearchInsertionOrdersResponse' => __DIR__ .'/SearchInsertionOrdersResponse.php',
        'PMG\BingAds\CustomerBilling\GetAccountMonthlySpendRequest' => __DIR__ .'/GetAccountMonthlySpendRequest.php',
        'PMG\BingAds\CustomerBilling\GetAccountMonthlySpendResponse' => __DIR__ .'/GetAccountMonthlySpendResponse.php',
        'PMG\BingAds\CustomerBilling\ArrayOflong' => __DIR__ .'/ArrayOflong.php',
        'PMG\BingAds\CustomerBilling\ArrayOfBillingDocumentInfo' => __DIR__ .'/ArrayOfBillingDocumentInfo.php',
        'PMG\BingAds\CustomerBilling\BillingDocumentInfo' => __DIR__ .'/BillingDocumentInfo.php',
        'PMG\BingAds\CustomerBilling\DataType' => __DIR__ .'/DataType.php',
        'PMG\BingAds\CustomerBilling\ArrayOfBillingDocument' => __DIR__ .'/ArrayOfBillingDocument.php',
        'PMG\BingAds\CustomerBilling\BillingDocument' => __DIR__ .'/BillingDocument.php',
        'PMG\BingAds\CustomerBilling\InsertionOrder' => __DIR__ .'/InsertionOrder.php',
        'PMG\BingAds\CustomerBilling\InsertionOrderStatus' => __DIR__ .'/InsertionOrderStatus.php',
        'PMG\BingAds\CustomerBilling\InsertionOrderPendingChanges' => __DIR__ .'/InsertionOrderPendingChanges.php',
        'PMG\BingAds\CustomerBilling\InsertionOrderPendingChangesStatus' => __DIR__ .'/InsertionOrderPendingChangesStatus.php',
        'PMG\BingAds\CustomerBilling\ArrayOfInsertionOrder' => __DIR__ .'/ArrayOfInsertionOrder.php',
        'PMG\BingAds\CustomerBilling\ArrayOfPredicate' => __DIR__ .'/ArrayOfPredicate.php',
        'PMG\BingAds\CustomerBilling\Predicate' => __DIR__ .'/Predicate.php',
        'PMG\BingAds\CustomerBilling\PredicateOperator' => __DIR__ .'/PredicateOperator.php',
        'PMG\BingAds\CustomerBilling\ArrayOfOrderBy' => __DIR__ .'/ArrayOfOrderBy.php',
        'PMG\BingAds\CustomerBilling\OrderBy' => __DIR__ .'/OrderBy.php',
        'PMG\BingAds\CustomerBilling\OrderByField' => __DIR__ .'/OrderByField.php',
        'PMG\BingAds\CustomerBilling\SortOrder' => __DIR__ .'/SortOrder.php',
        'PMG\BingAds\CustomerBilling\Paging' => __DIR__ .'/Paging.php',
        'PMG\BingAds\CustomerBilling\AdApiFault' => __DIR__ .'/AdApiFault.php',
        'PMG\BingAds\CustomerBilling\ApplicationFault' => __DIR__ .'/ApplicationFault.php',
        'PMG\BingAds\CustomerBilling\ArrayOfAdApiError' => __DIR__ .'/ArrayOfAdApiError.php',
        'PMG\BingAds\CustomerBilling\AdApiError' => __DIR__ .'/AdApiError.php',
        'PMG\BingAds\CustomerBilling\ApiBatchFault' => __DIR__ .'/ApiBatchFault.php',
        'PMG\BingAds\CustomerBilling\ApiFault' => __DIR__ .'/ApiFault.php',
        'PMG\BingAds\CustomerBilling\ArrayOfOperationError' => __DIR__ .'/ArrayOfOperationError.php',
        'PMG\BingAds\CustomerBilling\OperationError' => __DIR__ .'/OperationError.php',
        'PMG\BingAds\CustomerBilling\ArrayOfBatchError' => __DIR__ .'/ArrayOfBatchError.php',
        'PMG\BingAds\CustomerBilling\BatchError' => __DIR__ .'/BatchError.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_6466337499f6612541f4ee36d60d818a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
