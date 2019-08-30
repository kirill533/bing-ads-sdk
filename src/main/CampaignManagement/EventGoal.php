<?php

namespace PMG\BingAds\CampaignManagement;

class EventGoal extends ConversionGoal
{

    /**
     * @var string $ActionExpression
     */
    protected $ActionExpression = null;

    /**
     * @var ExpressionOperator $ActionOperator
     */
    protected $ActionOperator = null;

    /**
     * @var string $CategoryExpression
     */
    protected $CategoryExpression = null;

    /**
     * @var ExpressionOperator $CategoryOperator
     */
    protected $CategoryOperator = null;

    /**
     * @var string $LabelExpression
     */
    protected $LabelExpression = null;

    /**
     * @var ExpressionOperator $LabelOperator
     */
    protected $LabelOperator = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var ValueOperator $ValueOperator
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
     * @return ExpressionOperator
     */
    public function getActionOperator()
    {
        return $this->ActionOperator;
    }

    /**
     * @param ExpressionOperator $ActionOperator
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
     * @return ExpressionOperator
     */
    public function getCategoryOperator()
    {
        return $this->CategoryOperator;
    }

    /**
     * @param ExpressionOperator $CategoryOperator
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
     * @return ExpressionOperator
     */
    public function getLabelOperator()
    {
        return $this->LabelOperator;
    }

    /**
     * @param ExpressionOperator $LabelOperator
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
     * @return ValueOperator
     */
    public function getValueOperator()
    {
        return $this->ValueOperator;
    }

    /**
     * @param ValueOperator $ValueOperator
     * @return \PMG\BingAds\CampaignManagement\EventGoal
     */
    public function setValueOperator($ValueOperator)
    {
        $this->ValueOperator = $ValueOperator;
        return $this;
    }

}
