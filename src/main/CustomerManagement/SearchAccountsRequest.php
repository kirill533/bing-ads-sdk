<?php

namespace PMG\BingAds\CustomerManagement;

class SearchAccountsRequest
{

    /**
     * @var ArrayOfPredicate $Predicates
     */
    protected $Predicates = null;

    /**
     * @var ArrayOfOrderBy $Ordering
     */
    protected $Ordering = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @var AccountAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param ArrayOfPredicate $Predicates
     * @param ArrayOfOrderBy $Ordering
     * @param Paging $PageInfo
     * @param AccountAdditionalField $ReturnAdditionalFields
     */
    public function __construct($Predicates = null, $Ordering = null, $PageInfo = null, $ReturnAdditionalFields = null)
    {
    $this->Predicates = $Predicates;
    $this->Ordering = $Ordering;
    $this->PageInfo = $PageInfo;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return ArrayOfPredicate
     */
    public function getPredicates()
    {
        return $this->Predicates;
    }

    /**
     * @param ArrayOfPredicate $Predicates
     * @return \PMG\BingAds\CustomerManagement\SearchAccountsRequest
     */
    public function setPredicates($Predicates)
    {
        $this->Predicates = $Predicates;
        return $this;
    }

    /**
     * @return ArrayOfOrderBy
     */
    public function getOrdering()
    {
        return $this->Ordering;
    }

    /**
     * @param ArrayOfOrderBy $Ordering
     * @return \PMG\BingAds\CustomerManagement\SearchAccountsRequest
     */
    public function setOrdering($Ordering)
    {
        $this->Ordering = $Ordering;
        return $this;
    }

    /**
     * @return Paging
     */
    public function getPageInfo()
    {
        return $this->PageInfo;
    }

    /**
     * @param Paging $PageInfo
     * @return \PMG\BingAds\CustomerManagement\SearchAccountsRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

    /**
     * @return AccountAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param AccountAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CustomerManagement\SearchAccountsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
