<?php

namespace PMG\BingAds\CustomerManagement;

class SearchCustomersRequest
{

    /**
     * @var ArrayOfPredicate $Predicates
     */
    protected $Predicates = null;

    /**
     * @var DateRange $DateRange
     */
    protected $DateRange = null;

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
     * @param DateRange $DateRange
     * @param ArrayOfOrderBy $Ordering
     * @param Paging $PageInfo
     */
    public function __construct($Predicates = null, $DateRange = null, $Ordering = null, $PageInfo = null)
    {
      $this->Predicates = $Predicates;
      $this->DateRange = $DateRange;
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
     * @return \PMG\BingAds\CustomerManagement\SearchCustomersRequest
     */
    public function setPredicates($Predicates)
    {
      $this->Predicates = $Predicates;
      return $this;
    }

    /**
     * @return DateRange
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param DateRange $DateRange
     * @return \PMG\BingAds\CustomerManagement\SearchCustomersRequest
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
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
     * @return \PMG\BingAds\CustomerManagement\SearchCustomersRequest
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
     * @return \PMG\BingAds\CustomerManagement\SearchCustomersRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
