<?php


 function autoload_95dcf431baa3847637efd8338269695a($class)
{
    $classes = array(
        'PMG\BingAds\CustomerManagement\CustomerManagementService' => __DIR__ .'/CustomerManagementService.php',
        'PMG\BingAds\CustomerManagement\GetAccountsInfoRequest' => __DIR__ .'/GetAccountsInfoRequest.php',
        'PMG\BingAds\CustomerManagement\GetAccountsInfoResponse' => __DIR__ .'/GetAccountsInfoResponse.php',
        'PMG\BingAds\CustomerManagement\FindAccountsRequest' => __DIR__ .'/FindAccountsRequest.php',
        'PMG\BingAds\CustomerManagement\FindAccountsResponse' => __DIR__ .'/FindAccountsResponse.php',
        'PMG\BingAds\CustomerManagement\AddAccountRequest' => __DIR__ .'/AddAccountRequest.php',
        'PMG\BingAds\CustomerManagement\AddAccountResponse' => __DIR__ .'/AddAccountResponse.php',
        'PMG\BingAds\CustomerManagement\UpdateAccountRequest' => __DIR__ .'/UpdateAccountRequest.php',
        'PMG\BingAds\CustomerManagement\UpdateAccountResponse' => __DIR__ .'/UpdateAccountResponse.php',
        'PMG\BingAds\CustomerManagement\GetCustomerRequest' => __DIR__ .'/GetCustomerRequest.php',
        'PMG\BingAds\CustomerManagement\GetCustomerResponse' => __DIR__ .'/GetCustomerResponse.php',
        'PMG\BingAds\CustomerManagement\UpdateCustomerRequest' => __DIR__ .'/UpdateCustomerRequest.php',
        'PMG\BingAds\CustomerManagement\UpdateCustomerResponse' => __DIR__ .'/UpdateCustomerResponse.php',
        'PMG\BingAds\CustomerManagement\SignupCustomerRequest' => __DIR__ .'/SignupCustomerRequest.php',
        'PMG\BingAds\CustomerManagement\SignupCustomerResponse' => __DIR__ .'/SignupCustomerResponse.php',
        'PMG\BingAds\CustomerManagement\GetAccountRequest' => __DIR__ .'/GetAccountRequest.php',
        'PMG\BingAds\CustomerManagement\GetAccountResponse' => __DIR__ .'/GetAccountResponse.php',
        'PMG\BingAds\CustomerManagement\GetCustomersInfoRequest' => __DIR__ .'/GetCustomersInfoRequest.php',
        'PMG\BingAds\CustomerManagement\GetCustomersInfoResponse' => __DIR__ .'/GetCustomersInfoResponse.php',
        'PMG\BingAds\CustomerManagement\DeleteAccountRequest' => __DIR__ .'/DeleteAccountRequest.php',
        'PMG\BingAds\CustomerManagement\DeleteAccountResponse' => __DIR__ .'/DeleteAccountResponse.php',
        'PMG\BingAds\CustomerManagement\DeleteCustomerRequest' => __DIR__ .'/DeleteCustomerRequest.php',
        'PMG\BingAds\CustomerManagement\DeleteCustomerResponse' => __DIR__ .'/DeleteCustomerResponse.php',
        'PMG\BingAds\CustomerManagement\UpdateUserRequest' => __DIR__ .'/UpdateUserRequest.php',
        'PMG\BingAds\CustomerManagement\UpdateUserResponse' => __DIR__ .'/UpdateUserResponse.php',
        'PMG\BingAds\CustomerManagement\UpdateUserRolesRequest' => __DIR__ .'/UpdateUserRolesRequest.php',
        'PMG\BingAds\CustomerManagement\UpdateUserRolesResponse' => __DIR__ .'/UpdateUserRolesResponse.php',
        'PMG\BingAds\CustomerManagement\GetUserRequest' => __DIR__ .'/GetUserRequest.php',
        'PMG\BingAds\CustomerManagement\GetUserResponse' => __DIR__ .'/GetUserResponse.php',
        'PMG\BingAds\CustomerManagement\GetCurrentUserRequest' => __DIR__ .'/GetCurrentUserRequest.php',
        'PMG\BingAds\CustomerManagement\GetCurrentUserResponse' => __DIR__ .'/GetCurrentUserResponse.php',
        'PMG\BingAds\CustomerManagement\DeleteUserRequest' => __DIR__ .'/DeleteUserRequest.php',
        'PMG\BingAds\CustomerManagement\DeleteUserResponse' => __DIR__ .'/DeleteUserResponse.php',
        'PMG\BingAds\CustomerManagement\GetUsersInfoRequest' => __DIR__ .'/GetUsersInfoRequest.php',
        'PMG\BingAds\CustomerManagement\GetUsersInfoResponse' => __DIR__ .'/GetUsersInfoResponse.php',
        'PMG\BingAds\CustomerManagement\GetCustomerPilotFeaturesRequest' => __DIR__ .'/GetCustomerPilotFeaturesRequest.php',
        'PMG\BingAds\CustomerManagement\GetCustomerPilotFeaturesResponse' => __DIR__ .'/GetCustomerPilotFeaturesResponse.php',
        'PMG\BingAds\CustomerManagement\GetPilotFeaturesCountriesRequest' => __DIR__ .'/GetPilotFeaturesCountriesRequest.php',
        'PMG\BingAds\CustomerManagement\GetPilotFeaturesCountriesResponse' => __DIR__ .'/GetPilotFeaturesCountriesResponse.php',
        'PMG\BingAds\CustomerManagement\GetAccessibleCustomerRequest' => __DIR__ .'/GetAccessibleCustomerRequest.php',
        'PMG\BingAds\CustomerManagement\GetAccessibleCustomerResponse' => __DIR__ .'/GetAccessibleCustomerResponse.php',
        'PMG\BingAds\CustomerManagement\FindAccountsOrCustomersInfoRequest' => __DIR__ .'/FindAccountsOrCustomersInfoRequest.php',
        'PMG\BingAds\CustomerManagement\FindAccountsOrCustomersInfoResponse' => __DIR__ .'/FindAccountsOrCustomersInfoResponse.php',
        'PMG\BingAds\CustomerManagement\UpgradeCustomerToAgencyRequest' => __DIR__ .'/UpgradeCustomerToAgencyRequest.php',
        'PMG\BingAds\CustomerManagement\UpgradeCustomerToAgencyResponse' => __DIR__ .'/UpgradeCustomerToAgencyResponse.php',
        'PMG\BingAds\CustomerManagement\AddPrepayAccountRequest' => __DIR__ .'/AddPrepayAccountRequest.php',
        'PMG\BingAds\CustomerManagement\AddPrepayAccountResponse' => __DIR__ .'/AddPrepayAccountResponse.php',
        'PMG\BingAds\CustomerManagement\UpdatePrepayAccountRequest' => __DIR__ .'/UpdatePrepayAccountRequest.php',
        'PMG\BingAds\CustomerManagement\UpdatePrepayAccountResponse' => __DIR__ .'/UpdatePrepayAccountResponse.php',
        'PMG\BingAds\CustomerManagement\MapCustomerIdToExternalCustomerIdRequest' => __DIR__ .'/MapCustomerIdToExternalCustomerIdRequest.php',
        'PMG\BingAds\CustomerManagement\MapCustomerIdToExternalCustomerIdResponse' => __DIR__ .'/MapCustomerIdToExternalCustomerIdResponse.php',
        'PMG\BingAds\CustomerManagement\MapAccountIdToExternalAccountIdsRequest' => __DIR__ .'/MapAccountIdToExternalAccountIdsRequest.php',
        'PMG\BingAds\CustomerManagement\MapAccountIdToExternalAccountIdsResponse' => __DIR__ .'/MapAccountIdToExternalAccountIdsResponse.php',
        'PMG\BingAds\CustomerManagement\SearchCustomersRequest' => __DIR__ .'/SearchCustomersRequest.php',
        'PMG\BingAds\CustomerManagement\SearchCustomersResponse' => __DIR__ .'/SearchCustomersResponse.php',
        'PMG\BingAds\CustomerManagement\AddClientLinksRequest' => __DIR__ .'/AddClientLinksRequest.php',
        'PMG\BingAds\CustomerManagement\AddClientLinksResponse' => __DIR__ .'/AddClientLinksResponse.php',
        'PMG\BingAds\CustomerManagement\UpdateClientLinksRequest' => __DIR__ .'/UpdateClientLinksRequest.php',
        'PMG\BingAds\CustomerManagement\UpdateClientLinksResponse' => __DIR__ .'/UpdateClientLinksResponse.php',
        'PMG\BingAds\CustomerManagement\SearchClientLinksRequest' => __DIR__ .'/SearchClientLinksRequest.php',
        'PMG\BingAds\CustomerManagement\SearchClientLinksResponse' => __DIR__ .'/SearchClientLinksResponse.php',
        'PMG\BingAds\CustomerManagement\SearchAccountsRequest' => __DIR__ .'/SearchAccountsRequest.php',
        'PMG\BingAds\CustomerManagement\SearchAccountsResponse' => __DIR__ .'/SearchAccountsResponse.php',
        'PMG\BingAds\CustomerManagement\SendUserInvitationRequest' => __DIR__ .'/SendUserInvitationRequest.php',
        'PMG\BingAds\CustomerManagement\SendUserInvitationResponse' => __DIR__ .'/SendUserInvitationResponse.php',
        'PMG\BingAds\CustomerManagement\SearchUserInvitationsRequest' => __DIR__ .'/SearchUserInvitationsRequest.php',
        'PMG\BingAds\CustomerManagement\SearchUserInvitationsResponse' => __DIR__ .'/SearchUserInvitationsResponse.php',
        'PMG\BingAds\CustomerManagement\ArrayOfAccountInfo' => __DIR__ .'/ArrayOfAccountInfo.php',
        'PMG\BingAds\CustomerManagement\AccountInfo' => __DIR__ .'/AccountInfo.php',
        'PMG\BingAds\CustomerManagement\AccountLifeCycleStatus' => __DIR__ .'/AccountLifeCycleStatus.php',
        'PMG\BingAds\CustomerManagement\AdvertiserAccount' => __DIR__ .'/AdvertiserAccount.php',
        'PMG\BingAds\CustomerManagement\CurrencyCode' => __DIR__ .'/CurrencyCode.php',
        'PMG\BingAds\CustomerManagement\AccountFinancialStatus' => __DIR__ .'/AccountFinancialStatus.php',
        'PMG\BingAds\CustomerManagement\LanguageType' => __DIR__ .'/LanguageType.php',
        'PMG\BingAds\CustomerManagement\PaymentMethodType' => __DIR__ .'/PaymentMethodType.php',
        'PMG\BingAds\CustomerManagement\TimeZoneType' => __DIR__ .'/TimeZoneType.php',
        'PMG\BingAds\CustomerManagement\ArrayOfCustomerInfo' => __DIR__ .'/ArrayOfCustomerInfo.php',
        'PMG\BingAds\CustomerManagement\CustomerInfo' => __DIR__ .'/CustomerInfo.php',
        'PMG\BingAds\CustomerManagement\Address' => __DIR__ .'/Address.php',
        'PMG\BingAds\CustomerManagement\AutoTagType' => __DIR__ .'/AutoTagType.php',
        'PMG\BingAds\CustomerManagement\Customer' => __DIR__ .'/Customer.php',
        'PMG\BingAds\CustomerManagement\CustomerFinancialStatus' => __DIR__ .'/CustomerFinancialStatus.php',
        'PMG\BingAds\CustomerManagement\Industry' => __DIR__ .'/Industry.php',
        'PMG\BingAds\CustomerManagement\ServiceLevel' => __DIR__ .'/ServiceLevel.php',
        'PMG\BingAds\CustomerManagement\CustomerLifeCycleStatus' => __DIR__ .'/CustomerLifeCycleStatus.php',
        'PMG\BingAds\CustomerManagement\User' => __DIR__ .'/User.php',
        'PMG\BingAds\CustomerManagement\ContactInfo' => __DIR__ .'/ContactInfo.php',
        'PMG\BingAds\CustomerManagement\EmailFormat' => __DIR__ .'/EmailFormat.php',
        'PMG\BingAds\CustomerManagement\LCID' => __DIR__ .'/LCID.php',
        'PMG\BingAds\CustomerManagement\PersonName' => __DIR__ .'/PersonName.php',
        'PMG\BingAds\CustomerManagement\SecretQuestion' => __DIR__ .'/SecretQuestion.php',
        'PMG\BingAds\CustomerManagement\UserLifeCycleStatus' => __DIR__ .'/UserLifeCycleStatus.php',
        'PMG\BingAds\CustomerManagement\ArrayOfCustomerRole' => __DIR__ .'/ArrayOfCustomerRole.php',
        'PMG\BingAds\CustomerManagement\CustomerRole' => __DIR__ .'/CustomerRole.php',
        'PMG\BingAds\CustomerManagement\ArrayOfUserInfo' => __DIR__ .'/ArrayOfUserInfo.php',
        'PMG\BingAds\CustomerManagement\UserInfo' => __DIR__ .'/UserInfo.php',
        'PMG\BingAds\CustomerManagement\ArrayOfPilotFeature' => __DIR__ .'/ArrayOfPilotFeature.php',
        'PMG\BingAds\CustomerManagement\PilotFeature' => __DIR__ .'/PilotFeature.php',
        'PMG\BingAds\CustomerManagement\ArrayOfAccountInfoWithCustomerData' => __DIR__ .'/ArrayOfAccountInfoWithCustomerData.php',
        'PMG\BingAds\CustomerManagement\AccountInfoWithCustomerData' => __DIR__ .'/AccountInfoWithCustomerData.php',
        'PMG\BingAds\CustomerManagement\ArrayOfPredicate' => __DIR__ .'/ArrayOfPredicate.php',
        'PMG\BingAds\CustomerManagement\Predicate' => __DIR__ .'/Predicate.php',
        'PMG\BingAds\CustomerManagement\PredicateOperator' => __DIR__ .'/PredicateOperator.php',
        'PMG\BingAds\CustomerManagement\DateRange' => __DIR__ .'/DateRange.php',
        'PMG\BingAds\CustomerManagement\ArrayOfOrderBy' => __DIR__ .'/ArrayOfOrderBy.php',
        'PMG\BingAds\CustomerManagement\OrderBy' => __DIR__ .'/OrderBy.php',
        'PMG\BingAds\CustomerManagement\OrderByField' => __DIR__ .'/OrderByField.php',
        'PMG\BingAds\CustomerManagement\SortOrder' => __DIR__ .'/SortOrder.php',
        'PMG\BingAds\CustomerManagement\Paging' => __DIR__ .'/Paging.php',
        'PMG\BingAds\CustomerManagement\ArrayOfCustomer' => __DIR__ .'/ArrayOfCustomer.php',
        'PMG\BingAds\CustomerManagement\ArrayOfClientLink' => __DIR__ .'/ArrayOfClientLink.php',
        'PMG\BingAds\CustomerManagement\ClientLink' => __DIR__ .'/ClientLink.php',
        'PMG\BingAds\CustomerManagement\ClientLinkStatus' => __DIR__ .'/ClientLinkStatus.php',
        'PMG\BingAds\CustomerManagement\ArrayOfAdvertiserAccount' => __DIR__ .'/ArrayOfAdvertiserAccount.php',
        'PMG\BingAds\CustomerManagement\UserInvitation' => __DIR__ .'/UserInvitation.php',
        'PMG\BingAds\CustomerManagement\ArrayOfUserInvitation' => __DIR__ .'/ArrayOfUserInvitation.php',
        'PMG\BingAds\CustomerManagement\AdApiFault' => __DIR__ .'/AdApiFault.php',
        'PMG\BingAds\CustomerManagement\ApplicationFault' => __DIR__ .'/ApplicationFault.php',
        'PMG\BingAds\CustomerManagement\ArrayOfAdApiError' => __DIR__ .'/ArrayOfAdApiError.php',
        'PMG\BingAds\CustomerManagement\AdApiError' => __DIR__ .'/AdApiError.php',
        'PMG\BingAds\CustomerManagement\ApiFault' => __DIR__ .'/ApiFault.php',
        'PMG\BingAds\CustomerManagement\ArrayOfOperationError' => __DIR__ .'/ArrayOfOperationError.php',
        'PMG\BingAds\CustomerManagement\OperationError' => __DIR__ .'/OperationError.php',
        'PMG\BingAds\CustomerManagement\ArrayOfArrayOfOperationError' => __DIR__ .'/ArrayOfArrayOfOperationError.php',
        'PMG\BingAds\CustomerManagement\ArrayOfKeyValuePairOfstringstring' => __DIR__ .'/ArrayOfKeyValuePairOfstringstring.php',
        'PMG\BingAds\CustomerManagement\KeyValuePairOfstringstring' => __DIR__ .'/KeyValuePairOfstringstring.php',
        'PMG\BingAds\CustomerManagement\ArrayOflong' => __DIR__ .'/ArrayOflong.php',
        'PMG\BingAds\CustomerManagement\ArrayOfint' => __DIR__ .'/ArrayOfint.php',
        'PMG\BingAds\CustomerManagement\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_95dcf431baa3847637efd8338269695a');

// Do nothing. The rest is just leftovers from the code generation.
{
}