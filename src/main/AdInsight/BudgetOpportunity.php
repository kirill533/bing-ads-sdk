<?php

namespace PMG\BingAds\AdInsight;

class BudgetOpportunity extends Opportunity
{

    /**
     * @var ArrayOfBudgetPoint $BudgetPoints
     */
    protected $BudgetPoints = null;

    /**
     * @var BudgetLimitType $BudgetType
     */
    protected $BudgetType = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var float $CurrentBudget
     */
    protected $CurrentBudget = null;

    /**
     * @var float $IncreaseInClicks
     */
    protected $IncreaseInClicks = null;

    /**
     * @var int $IncreaseInImpressions
     */
    protected $IncreaseInImpressions = null;

    /**
     * @var int $PercentageIncreaseInClicks
     */
    protected $PercentageIncreaseInClicks = null;

    /**
     * @var int $PercentageIncreaseInImpressions
     */
    protected $PercentageIncreaseInImpressions = null;

    /**
     * @var float $RecommendedBudget
     */
    protected $RecommendedBudget = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfBudgetPoint
     */
    public function getBudgetPoints()
    {
        return $this->BudgetPoints;
    }

    /**
     * @param ArrayOfBudgetPoint $BudgetPoints
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setBudgetPoints($BudgetPoints)
    {
        $this->BudgetPoints = $BudgetPoints;
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
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setBudgetType($BudgetType)
    {
        $this->BudgetType = $BudgetType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentBudget()
    {
        return $this->CurrentBudget;
    }

    /**
     * @param float $CurrentBudget
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setCurrentBudget($CurrentBudget)
    {
        $this->CurrentBudget = $CurrentBudget;
        return $this;
    }

    /**
     * @return float
     */
    public function getIncreaseInClicks()
    {
        return $this->IncreaseInClicks;
    }

    /**
     * @param float $IncreaseInClicks
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setIncreaseInClicks($IncreaseInClicks)
    {
        $this->IncreaseInClicks = $IncreaseInClicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncreaseInImpressions()
    {
        return $this->IncreaseInImpressions;
    }

    /**
     * @param int $IncreaseInImpressions
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setIncreaseInImpressions($IncreaseInImpressions)
    {
        $this->IncreaseInImpressions = $IncreaseInImpressions;
        return $this;
    }

    /**
     * @return int
     */
    public function getPercentageIncreaseInClicks()
    {
        return $this->PercentageIncreaseInClicks;
    }

    /**
     * @param int $PercentageIncreaseInClicks
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setPercentageIncreaseInClicks($PercentageIncreaseInClicks)
    {
        $this->PercentageIncreaseInClicks = $PercentageIncreaseInClicks;
        return $this;
    }

    /**
     * @return int
     */
    public function getPercentageIncreaseInImpressions()
    {
        return $this->PercentageIncreaseInImpressions;
    }

    /**
     * @param int $PercentageIncreaseInImpressions
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setPercentageIncreaseInImpressions($PercentageIncreaseInImpressions)
    {
        $this->PercentageIncreaseInImpressions = $PercentageIncreaseInImpressions;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecommendedBudget()
    {
        return $this->RecommendedBudget;
    }

    /**
     * @param float $RecommendedBudget
     * @return \PMG\BingAds\AdInsight\BudgetOpportunity
     */
    public function setRecommendedBudget($RecommendedBudget)
    {
        $this->RecommendedBudget = $RecommendedBudget;
        return $this;
    }

}
