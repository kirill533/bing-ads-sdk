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
     * @param ArrayOfPredicate $Predicates
     * @param ArrayOfOrderBy $Ordering
     * @param Paging $PageInfo
     */
    public function __construct($Predicates = null, $Ordering = null, $PageInfo = null)
    {
      $this->Predicates = $Predicates;
      $this->Ordering = $Ordering;
      $this->PageInfo = $PageInfo;
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

}
