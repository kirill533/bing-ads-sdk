<?php

namespace PMG\BingAds\AdInsight;

class CampaignEstimator
{

    /**
     * @var ArrayOfAdGroupEstimator $AdGroupEstimators
     */
    protected $AdGroupEstimators = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOfCriterion $Criteria
     */
    protected $Criteria = null;

    /**
     * @var float $DailyBudget
     */
    protected $DailyBudget = null;

    /**
     * @var ArrayOfNegativeKeyword $NegativeKeywords
     */
    protected $NegativeKeywords = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAdGroupEstimator
     */
    public function getAdGroupEstimators()
    {
      return $this->AdGroupEstimators;
    }

    /**
     * @param ArrayOfAdGroupEstimator $AdGroupEstimators
     * @return \PMG\BingAds\AdInsight\CampaignEstimator
     */
    public function setAdGroupEstimators($AdGroupEstimators)
    {
      $this->AdGroupEstimators = $AdGroupEstimators;
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
     * @return \PMG\BingAds\AdInsight\CampaignEstimator
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return ArrayOfCriterion
     */
    public function getCriteria()
    {
      return $this->Criteria;
    }

    /**
     * @param ArrayOfCriterion $Criteria
     * @return \PMG\BingAds\AdInsight\CampaignEstimator
     */
    public function setCriteria($Criteria)
    {
      $this->Criteria = $Criteria;
      return $this;
    }

    /**
     * @return float
     */
    public function getDailyBudget()
    {
      return $this->DailyBudget;
    }

    /**
     * @param float $DailyBudget
     * @return \PMG\BingAds\AdInsight\CampaignEstimator
     */
    public function setDailyBudget($DailyBudget)
    {
      $this->DailyBudget = $DailyBudget;
      return $this;
    }

    /**
     * @return ArrayOfNegativeKeyword
     */
    public function getNegativeKeywords()
    {
      return $this->NegativeKeywords;
    }

    /**
     * @param ArrayOfNegativeKeyword $NegativeKeywords
     * @return \PMG\BingAds\AdInsight\CampaignEstimator
     */
    public function setNegativeKeywords($NegativeKeywords)
    {
      $this->NegativeKeywords = $NegativeKeywords;
      return $this;
    }

}
