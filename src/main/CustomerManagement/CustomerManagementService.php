<?php

namespace PMG\BingAds\CustomerManagement;

class CustomerManagementService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/Customer/v12';
    const WSDL_PROD = 'https://clientcenter.api.bingads.microsoft.com/Api/CustomerManagement/v12/CustomerManagementService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://clientcenter.api.sandbox.bingads.microsoft.com/Api/CustomerManagement/v12/CustomerManagementService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetAccountsInfoRequest' => 'PMG\\BingAds\\CustomerManagement\\GetAccountsInfoRequest',
      'GetAccountsInfoResponse' => 'PMG\\BingAds\\CustomerManagement\\GetAccountsInfoResponse',
      'FindAccountsRequest' => 'PMG\\BingAds\\CustomerManagement\\FindAccountsRequest',
      'FindAccountsResponse' => 'PMG\\BingAds\\CustomerManagement\\FindAccountsResponse',
      'AddAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\AddAccountRequest',
      'AddAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\AddAccountResponse',
      'UpdateAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdateAccountRequest',
      'UpdateAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdateAccountResponse',
      'GetCustomerRequest' => 'PMG\\BingAds\\CustomerManagement\\GetCustomerRequest',
      'GetCustomerResponse' => 'PMG\\BingAds\\CustomerManagement\\GetCustomerResponse',
      'UpdateCustomerRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdateCustomerRequest',
      'UpdateCustomerResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdateCustomerResponse',
      'SignupCustomerRequest' => 'PMG\\BingAds\\CustomerManagement\\SignupCustomerRequest',
      'SignupCustomerResponse' => 'PMG\\BingAds\\CustomerManagement\\SignupCustomerResponse',
      'GetAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\GetAccountRequest',
      'GetAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\GetAccountResponse',
      'GetCustomersInfoRequest' => 'PMG\\BingAds\\CustomerManagement\\GetCustomersInfoRequest',
      'GetCustomersInfoResponse' => 'PMG\\BingAds\\CustomerManagement\\GetCustomersInfoResponse',
      'DeleteAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\DeleteAccountRequest',
      'DeleteAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\DeleteAccountResponse',
      'DeleteCustomerRequest' => 'PMG\\BingAds\\CustomerManagement\\DeleteCustomerRequest',
      'DeleteCustomerResponse' => 'PMG\\BingAds\\CustomerManagement\\DeleteCustomerResponse',
      'UpdateUserRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdateUserRequest',
      'UpdateUserResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdateUserResponse',
      'UpdateUserRolesRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdateUserRolesRequest',
      'UpdateUserRolesResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdateUserRolesResponse',
      'GetUserRequest' => 'PMG\\BingAds\\CustomerManagement\\GetUserRequest',
      'GetUserResponse' => 'PMG\\BingAds\\CustomerManagement\\GetUserResponse',
      'GetCurrentUserRequest' => 'PMG\\BingAds\\CustomerManagement\\GetCurrentUserRequest',
      'GetCurrentUserResponse' => 'PMG\\BingAds\\CustomerManagement\\GetCurrentUserResponse',
      'DeleteUserRequest' => 'PMG\\BingAds\\CustomerManagement\\DeleteUserRequest',
      'DeleteUserResponse' => 'PMG\\BingAds\\CustomerManagement\\DeleteUserResponse',
      'GetUsersInfoRequest' => 'PMG\\BingAds\\CustomerManagement\\GetUsersInfoRequest',
      'GetUsersInfoResponse' => 'PMG\\BingAds\\CustomerManagement\\GetUsersInfoResponse',
      'GetCustomerPilotFeaturesRequest' => 'PMG\\BingAds\\CustomerManagement\\GetCustomerPilotFeaturesRequest',
      'GetCustomerPilotFeaturesResponse' => 'PMG\\BingAds\\CustomerManagement\\GetCustomerPilotFeaturesResponse',
      'GetPilotFeaturesCountriesRequest' => 'PMG\\BingAds\\CustomerManagement\\GetPilotFeaturesCountriesRequest',
      'GetPilotFeaturesCountriesResponse' => 'PMG\\BingAds\\CustomerManagement\\GetPilotFeaturesCountriesResponse',
      'GetAccessibleCustomerRequest' => 'PMG\\BingAds\\CustomerManagement\\GetAccessibleCustomerRequest',
      'GetAccessibleCustomerResponse' => 'PMG\\BingAds\\CustomerManagement\\GetAccessibleCustomerResponse',
      'FindAccountsOrCustomersInfoRequest' => 'PMG\\BingAds\\CustomerManagement\\FindAccountsOrCustomersInfoRequest',
      'FindAccountsOrCustomersInfoResponse' => 'PMG\\BingAds\\CustomerManagement\\FindAccountsOrCustomersInfoResponse',
      'UpgradeCustomerToAgencyRequest' => 'PMG\\BingAds\\CustomerManagement\\UpgradeCustomerToAgencyRequest',
      'UpgradeCustomerToAgencyResponse' => 'PMG\\BingAds\\CustomerManagement\\UpgradeCustomerToAgencyResponse',
      'AddPrepayAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\AddPrepayAccountRequest',
      'AddPrepayAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\AddPrepayAccountResponse',
      'UpdatePrepayAccountRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdatePrepayAccountRequest',
      'UpdatePrepayAccountResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdatePrepayAccountResponse',
      'MapCustomerIdToExternalCustomerIdRequest' => 'PMG\\BingAds\\CustomerManagement\\MapCustomerIdToExternalCustomerIdRequest',
      'MapCustomerIdToExternalCustomerIdResponse' => 'PMG\\BingAds\\CustomerManagement\\MapCustomerIdToExternalCustomerIdResponse',
      'MapAccountIdToExternalAccountIdsRequest' => 'PMG\\BingAds\\CustomerManagement\\MapAccountIdToExternalAccountIdsRequest',
      'MapAccountIdToExternalAccountIdsResponse' => 'PMG\\BingAds\\CustomerManagement\\MapAccountIdToExternalAccountIdsResponse',
      'SearchCustomersRequest' => 'PMG\\BingAds\\CustomerManagement\\SearchCustomersRequest',
      'SearchCustomersResponse' => 'PMG\\BingAds\\CustomerManagement\\SearchCustomersResponse',
      'AddClientLinksRequest' => 'PMG\\BingAds\\CustomerManagement\\AddClientLinksRequest',
      'AddClientLinksResponse' => 'PMG\\BingAds\\CustomerManagement\\AddClientLinksResponse',
      'UpdateClientLinksRequest' => 'PMG\\BingAds\\CustomerManagement\\UpdateClientLinksRequest',
      'UpdateClientLinksResponse' => 'PMG\\BingAds\\CustomerManagement\\UpdateClientLinksResponse',
      'SearchClientLinksRequest' => 'PMG\\BingAds\\CustomerManagement\\SearchClientLinksRequest',
      'SearchClientLinksResponse' => 'PMG\\BingAds\\CustomerManagement\\SearchClientLinksResponse',
      'SearchAccountsRequest' => 'PMG\\BingAds\\CustomerManagement\\SearchAccountsRequest',
      'SearchAccountsResponse' => 'PMG\\BingAds\\CustomerManagement\\SearchAccountsResponse',
      'SendUserInvitationRequest' => 'PMG\\BingAds\\CustomerManagement\\SendUserInvitationRequest',
      'SendUserInvitationResponse' => 'PMG\\BingAds\\CustomerManagement\\SendUserInvitationResponse',
      'SearchUserInvitationsRequest' => 'PMG\\BingAds\\CustomerManagement\\SearchUserInvitationsRequest',
      'SearchUserInvitationsResponse' => 'PMG\\BingAds\\CustomerManagement\\SearchUserInvitationsResponse',
      'ArrayOfAccountInfo' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfAccountInfo',
      'AccountInfo' => 'PMG\\BingAds\\CustomerManagement\\AccountInfo',
      'AdvertiserAccount' => 'PMG\\BingAds\\CustomerManagement\\AdvertiserAccount',
      'ArrayOfCustomerInfo' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfCustomerInfo',
      'CustomerInfo' => 'PMG\\BingAds\\CustomerManagement\\CustomerInfo',
      'Address' => 'PMG\\BingAds\\CustomerManagement\\Address',
      'Customer' => 'PMG\\BingAds\\CustomerManagement\\Customer',
      'User' => 'PMG\\BingAds\\CustomerManagement\\User',
      'ContactInfo' => 'PMG\\BingAds\\CustomerManagement\\ContactInfo',
      'PersonName' => 'PMG\\BingAds\\CustomerManagement\\PersonName',
      'ArrayOfCustomerRole' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfCustomerRole',
      'CustomerRole' => 'PMG\\BingAds\\CustomerManagement\\CustomerRole',
      'ArrayOfUserInfo' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfUserInfo',
      'UserInfo' => 'PMG\\BingAds\\CustomerManagement\\UserInfo',
      'ArrayOfPilotFeature' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfPilotFeature',
      'PilotFeature' => 'PMG\\BingAds\\CustomerManagement\\PilotFeature',
      'ArrayOfAccountInfoWithCustomerData' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfAccountInfoWithCustomerData',
      'AccountInfoWithCustomerData' => 'PMG\\BingAds\\CustomerManagement\\AccountInfoWithCustomerData',
      'ArrayOfPredicate' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfPredicate',
      'Predicate' => 'PMG\\BingAds\\CustomerManagement\\Predicate',
      'DateRange' => 'PMG\\BingAds\\CustomerManagement\\DateRange',
      'ArrayOfOrderBy' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfOrderBy',
      'OrderBy' => 'PMG\\BingAds\\CustomerManagement\\OrderBy',
      'Paging' => 'PMG\\BingAds\\CustomerManagement\\Paging',
      'ArrayOfCustomer' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfCustomer',
      'ArrayOfClientLink' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfClientLink',
      'ClientLink' => 'PMG\\BingAds\\CustomerManagement\\ClientLink',
      'ArrayOfAdvertiserAccount' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfAdvertiserAccount',
      'UserInvitation' => 'PMG\\BingAds\\CustomerManagement\\UserInvitation',
      'ArrayOfUserInvitation' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfUserInvitation',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\CustomerManagement\\AdApiError',
      'ArrayOfOperationError' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\CustomerManagement\\OperationError',
      'ArrayOfArrayOfOperationError' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfArrayOfOperationError',
      'ArrayOfKeyValuePairOfstringstring' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfKeyValuePairOfstringstring',
      'KeyValuePairOfstringstring' => 'PMG\\BingAds\\CustomerManagement\\KeyValuePairOfstringstring',
      'ArrayOflong' => 'PMG\\BingAds\\CustomerManagement\\ArrayOflong',
      'ArrayOfint' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfint',
      'ArrayOfstring' => 'PMG\\BingAds\\CustomerManagement\\ArrayOfstring',
      'ApplicationFault' => 'PMG\\BingAds\\CustomerManagement\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\CustomerManagement\\ApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\CustomerManagement\\AdApiFault',
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
     * @param GetAccountsInfoRequest $parameters
     * @return GetAccountsInfoResponse
     */
    public function getAccountsInfo(GetAccountsInfoRequest $parameters)
    {
      return $this->__soapCall("GetAccountsInfo", array($parameters));
    }

    /**
     * @param FindAccountsRequest $parameters
     * @return FindAccountsResponse
     */
    public function findAccounts(FindAccountsRequest $parameters)
    {
      return $this->__soapCall("FindAccounts", array($parameters));
    }

    /**
     * @param AddAccountRequest $parameters
     * @return AddAccountResponse
     */
    public function addAccount(AddAccountRequest $parameters)
    {
      return $this->__soapCall("AddAccount", array($parameters));
    }

    /**
     * @param UpdateAccountRequest $parameters
     * @return UpdateAccountResponse
     */
    public function updateAccount(UpdateAccountRequest $parameters)
    {
      return $this->__soapCall("UpdateAccount", array($parameters));
    }

    /**
     * @param GetCustomerRequest $parameters
     * @return GetCustomerResponse
     */
    public function getCustomer(GetCustomerRequest $parameters)
    {
      return $this->__soapCall("GetCustomer", array($parameters));
    }

    /**
     * @param UpdateCustomerRequest $parameters
     * @return UpdateCustomerResponse
     */
    public function updateCustomer(UpdateCustomerRequest $parameters)
    {
      return $this->__soapCall("UpdateCustomer", array($parameters));
    }

    /**
     * @param SignupCustomerRequest $parameters
     * @return SignupCustomerResponse
     */
    public function signupCustomer(SignupCustomerRequest $parameters)
    {
      return $this->__soapCall("SignupCustomer", array($parameters));
    }

    /**
     * @param GetAccountRequest $parameters
     * @return GetAccountResponse
     */
    public function getAccount(GetAccountRequest $parameters)
    {
      return $this->__soapCall("GetAccount", array($parameters));
    }

    /**
     * @param GetCustomersInfoRequest $parameters
     * @return GetCustomersInfoResponse
     */
    public function getCustomersInfo(GetCustomersInfoRequest $parameters)
    {
      return $this->__soapCall("GetCustomersInfo", array($parameters));
    }

    /**
     * @param DeleteAccountRequest $parameters
     * @return DeleteAccountResponse
     */
    public function deleteAccount(DeleteAccountRequest $parameters)
    {
      return $this->__soapCall("DeleteAccount", array($parameters));
    }

    /**
     * @param DeleteCustomerRequest $parameters
     * @return DeleteCustomerResponse
     */
    public function deleteCustomer(DeleteCustomerRequest $parameters)
    {
      return $this->__soapCall("DeleteCustomer", array($parameters));
    }

    /**
     * @param UpdateUserRequest $parameters
     * @return UpdateUserResponse
     */
    public function updateUser(UpdateUserRequest $parameters)
    {
      return $this->__soapCall("UpdateUser", array($parameters));
    }

    /**
     * @param UpdateUserRolesRequest $parameters
     * @return UpdateUserRolesResponse
     */
    public function updateUserRoles(UpdateUserRolesRequest $parameters)
    {
      return $this->__soapCall("UpdateUserRoles", array($parameters));
    }

    /**
     * @param GetUserRequest $parameters
     * @return GetUserResponse
     */
    public function getUser(GetUserRequest $parameters)
    {
      return $this->__soapCall("GetUser", array($parameters));
    }

    /**
     * @param GetCurrentUserRequest $parameters
     * @return GetCurrentUserResponse
     */
    public function getCurrentUser(GetCurrentUserRequest $parameters)
    {
      return $this->__soapCall("GetCurrentUser", array($parameters));
    }

    /**
     * @param DeleteUserRequest $parameters
     * @return DeleteUserResponse
     */
    public function deleteUser(DeleteUserRequest $parameters)
    {
      return $this->__soapCall("DeleteUser", array($parameters));
    }

    /**
     * @param GetUsersInfoRequest $parameters
     * @return GetUsersInfoResponse
     */
    public function getUsersInfo(GetUsersInfoRequest $parameters)
    {
      return $this->__soapCall("GetUsersInfo", array($parameters));
    }

    /**
     * @param GetCustomerPilotFeaturesRequest $parameters
     * @return GetCustomerPilotFeaturesResponse
     */
    public function getCustomerPilotFeatures(GetCustomerPilotFeaturesRequest $parameters)
    {
      return $this->__soapCall("GetCustomerPilotFeatures", array($parameters));
    }

    /**
     * @param GetPilotFeaturesCountriesRequest $parameters
     * @return GetPilotFeaturesCountriesResponse
     */
    public function getPilotFeaturesCountries(GetPilotFeaturesCountriesRequest $parameters)
    {
      return $this->__soapCall("GetPilotFeaturesCountries", array($parameters));
    }

    /**
     * @param GetAccessibleCustomerRequest $parameters
     * @return GetAccessibleCustomerResponse
     */
    public function getAccessibleCustomer(GetAccessibleCustomerRequest $parameters)
    {
      return $this->__soapCall("GetAccessibleCustomer", array($parameters));
    }

    /**
     * @param FindAccountsOrCustomersInfoRequest $parameters
     * @return FindAccountsOrCustomersInfoResponse
     */
    public function findAccountsOrCustomersInfo(FindAccountsOrCustomersInfoRequest $parameters)
    {
      return $this->__soapCall("FindAccountsOrCustomersInfo", array($parameters));
    }

    /**
     * @param UpgradeCustomerToAgencyRequest $parameters
     * @return UpgradeCustomerToAgencyResponse
     */
    public function upgradeCustomerToAgency(UpgradeCustomerToAgencyRequest $parameters)
    {
      return $this->__soapCall("UpgradeCustomerToAgency", array($parameters));
    }

    /**
     * @param AddPrepayAccountRequest $parameters
     * @return AddPrepayAccountResponse
     */
    public function addPrepayAccount(AddPrepayAccountRequest $parameters)
    {
      return $this->__soapCall("AddPrepayAccount", array($parameters));
    }

    /**
     * @param UpdatePrepayAccountRequest $parameters
     * @return UpdatePrepayAccountResponse
     */
    public function updatePrepayAccount(UpdatePrepayAccountRequest $parameters)
    {
      return $this->__soapCall("UpdatePrepayAccount", array($parameters));
    }

    /**
     * @param MapCustomerIdToExternalCustomerIdRequest $parameters
     * @return MapCustomerIdToExternalCustomerIdResponse
     */
    public function mapCustomerIdToExternalCustomerId(MapCustomerIdToExternalCustomerIdRequest $parameters)
    {
      return $this->__soapCall("MapCustomerIdToExternalCustomerId", array($parameters));
    }

    /**
     * @param MapAccountIdToExternalAccountIdsRequest $parameters
     * @return MapAccountIdToExternalAccountIdsResponse
     */
    public function mapAccountIdToExternalAccountIds(MapAccountIdToExternalAccountIdsRequest $parameters)
    {
      return $this->__soapCall("MapAccountIdToExternalAccountIds", array($parameters));
    }

    /**
     * @param SearchCustomersRequest $parameters
     * @return SearchCustomersResponse
     */
    public function searchCustomers(SearchCustomersRequest $parameters)
    {
      return $this->__soapCall("SearchCustomers", array($parameters));
    }

    /**
     * @param AddClientLinksRequest $parameters
     * @return AddClientLinksResponse
     */
    public function addClientLinks(AddClientLinksRequest $parameters)
    {
      return $this->__soapCall("AddClientLinks", array($parameters));
    }

    /**
     * @param UpdateClientLinksRequest $parameters
     * @return UpdateClientLinksResponse
     */
    public function updateClientLinks(UpdateClientLinksRequest $parameters)
    {
      return $this->__soapCall("UpdateClientLinks", array($parameters));
    }

    /**
     * @param SearchClientLinksRequest $parameters
     * @return SearchClientLinksResponse
     */
    public function searchClientLinks(SearchClientLinksRequest $parameters)
    {
      return $this->__soapCall("SearchClientLinks", array($parameters));
    }

    /**
     * @param SearchAccountsRequest $parameters
     * @return SearchAccountsResponse
     */
    public function searchAccounts(SearchAccountsRequest $parameters)
    {
      return $this->__soapCall("SearchAccounts", array($parameters));
    }

    /**
     * @param SendUserInvitationRequest $parameters
     * @return SendUserInvitationResponse
     */
    public function sendUserInvitation(SendUserInvitationRequest $parameters)
    {
      return $this->__soapCall("SendUserInvitation", array($parameters));
    }

    /**
     * @param SearchUserInvitationsRequest $parameters
     * @return SearchUserInvitationsResponse
     */
    public function searchUserInvitations(SearchUserInvitationsRequest $parameters)
    {
      return $this->__soapCall("SearchUserInvitations", array($parameters));
    }

}
