<?php

namespace PMG\BingAds\AdInsight;

class DomainCategory
{

    /**
     * @var float $Bid
     */
    protected $Bid = null;

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    /**
     * @var float $Coverage
     */
    protected $Coverage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getBid()
    {
      return $this->Bid;
    }

    /**
     * @param float $Bid
     * @return \PMG\BingAds\AdInsight\DomainCategory
     */
    public function setBid($Bid)
    {
      $this->Bid = $Bid;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return \PMG\BingAds\AdInsight\DomainCategory
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoverage()
    {
      return $this->Coverage;
    }

    /**
     * @param float $Coverage
     * @return \PMG\BingAds\AdInsight\DomainCategory
     */
    public function setCoverage($Coverage)
    {
      $this->Coverage = $Coverage;
      return $this;
    }

}
