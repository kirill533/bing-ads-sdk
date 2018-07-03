<?php

namespace PMG\BingAds\CampaignManagement;

class EventGoal extends ConversionGoal
{

    /**
     * @var string $ActionExpression
     */
    protected $ActionExpression = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ExpressionOperator for valid values
     *
     * @var string $ActionOperator
     */
    protected $ActionOperator = null;

    /**
     * @var string $CategoryExpression
     */
    protected $CategoryExpression = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ExpressionOperator for valid values
     *
     * @var string $CategoryOperator
     */
    protected $CategoryOperator = null;

    /**
     * @var string $LabelExpression
     */
    protected $LabelExpression = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ExpressionOperator for valid values
     *
     * @var string $LabelOperator
     */
    protected $LabelOperator = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ValueOperator for valid values
     *
     * @var string $ValueOperator
     */
    protected $ValueOperator = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getActionExpression()
    {
      return $this->ActionExpression;
    }

    /**
     * @param string $ActionExpression
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setActionExpression($ActionExpression)
    {
      $this->ActionExpression = $ActionExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionOperator()
    {
      return $this->ActionOperator;
    }

    /**
     * @param string $ActionOperator
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setActionOperator($ActionOperator)
    {
      $this->ActionOperator = $ActionOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryExpression()
    {
      return $this->CategoryExpression;
    }

    /**
     * @param string $CategoryExpression
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setCategoryExpression($CategoryExpression)
    {
      $this->CategoryExpression = $CategoryExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryOperator()
    {
      return $this->CategoryOperator;
    }

    /**
     * @param string $CategoryOperator
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setCategoryOperator($CategoryOperator)
    {
      $this->CategoryOperator = $CategoryOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelExpression()
    {
      return $this->LabelExpression;
    }

    /**
     * @param string $LabelExpression
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setLabelExpression($LabelExpression)
    {
      $this->LabelExpression = $LabelExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelOperator()
    {
      return $this->LabelOperator;
    }

    /**
     * @param string $LabelOperator
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setLabelOperator($LabelOperator)
    {
      $this->LabelOperator = $LabelOperator;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueOperator()
    {
      return $this->ValueOperator;
    }

    /**
     * @param string $ValueOperator
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setValueOperator($ValueOperator)
    {
      $this->ValueOperator = $ValueOperator;
      return $this;
    }

}
