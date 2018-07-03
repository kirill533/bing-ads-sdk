<?php

namespace PMG\BingAds\AdInsight;

class BudgetPoint
{

    /**
     * @var float $BudgetAmount
     */
    protected $BudgetAmount = null;

    /**
     * @see \PMG\BingAds\AdInsight\BudgetPointType for valid values
     *
     * @var string $BudgetPointType
     */
    protected $BudgetPointType = null;

    /**
     * @var float $EstimatedWeeklyClicks
     */
    protected $EstimatedWeeklyClicks = null;

    /**
     * @var float $EstimatedWeeklyCost
     */
    protected $EstimatedWeeklyCost = null;

    /**
     * @var float $EstimatedWeeklyImpressions
     */
    protected $EstimatedWeeklyImpressions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getBudgetAmount()
    {
      return $this->BudgetAmount;
    }

    /**
     * @param float $BudgetAmount
     * @return \PMG\BingAds\AdInsight\BudgetPoint
     */
    public function setBudgetAmount($BudgetAmount)
    {
      $this->BudgetAmount = $BudgetAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getBudgetPointType()
    {
      return $this->BudgetPointType;
    }

    /**
     * @param string $BudgetPointType
     * @return \PMG\BingAds\AdInsight\BudgetPoint
     */
    public function setBudgetPointType($BudgetPointType)
    {
      $this->BudgetPointType = $BudgetPointType;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWeeklyClicks()
    {
      return $this->EstimatedWeeklyClicks;
    }

    /**
     * @param float $EstimatedWeeklyClicks
     * @return \PMG\BingAds\AdInsight\BudgetPoint
     */
    public function setEstimatedWeeklyClicks($EstimatedWeeklyClicks)
    {
      $this->EstimatedWeeklyClicks = $EstimatedWeeklyClicks;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWeeklyCost()
    {
      return $this->EstimatedWeeklyCost;
    }

    /**
     * @param float $EstimatedWeeklyCost
     * @return \PMG\BingAds\AdInsight\BudgetPoint
     */
    public function setEstimatedWeeklyCost($EstimatedWeeklyCost)
    {
      $this->EstimatedWeeklyCost = $EstimatedWeeklyCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedWeeklyImpressions()
    {
      return $this->EstimatedWeeklyImpressions;
    }

    /**
     * @param float $EstimatedWeeklyImpressions
     * @return \PMG\BingAds\AdInsight\BudgetPoint
     */
    public function setEstimatedWeeklyImpressions($EstimatedWeeklyImpressions)
    {
      $this->EstimatedWeeklyImpressions = $EstimatedWeeklyImpressions;
      return $this;
    }

}
