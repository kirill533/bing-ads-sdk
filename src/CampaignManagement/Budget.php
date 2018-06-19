<?php

namespace PMG\BingAds\CampaignManagement;

class Budget
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var int $AssociationCount
     */
    protected $AssociationCount = null;

    /**
     * @var BudgetLimitType $BudgetType
     */
    protected $BudgetType = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \PMG\BingAds\CampaignManagement\Budget
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssociationCount()
    {
      return $this->AssociationCount;
    }

    /**
     * @param int $AssociationCount
     * @return \PMG\BingAds\CampaignManagement\Budget
     */
    public function setAssociationCount($AssociationCount)
    {
      $this->AssociationCount = $AssociationCount;
      return $this;
    }

    /**
     * @return BudgetLimitType
     */
    public function getBudgetType()
    {
      return $this->BudgetType;
    }

    /**
     * @param BudgetLimitType $BudgetType
     * @return \PMG\BingAds\CampaignManagement\Budget
     */
    public function setBudgetType($BudgetType)
    {
      $this->BudgetType = $BudgetType;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\Budget
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\Budget
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
