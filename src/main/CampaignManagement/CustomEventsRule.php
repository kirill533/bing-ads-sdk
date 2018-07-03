<?php

namespace PMG\BingAds\CampaignManagement;

class CustomEventsRule extends RemarketingRule
{

    /**
     * @var string $Action
     */
    protected $Action = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\StringOperator for valid values
     *
     * @var string $ActionOperator
     */
    protected $ActionOperator = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\StringOperator for valid values
     *
     * @var string $CategoryOperator
     */
    protected $CategoryOperator = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\StringOperator for valid values
     *
     * @var string $LabelOperator
     */
    protected $LabelOperator = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\NumberOperator for valid values
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
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string $Action
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setActionOperator($ActionOperator)
    {
      $this->ActionOperator = $ActionOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setCategoryOperator($CategoryOperator)
    {
      $this->CategoryOperator = $CategoryOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
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
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
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
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
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
     * @return \PMG\BingAds\CampaignManagement\CustomEventsRule
     */
    public function setValueOperator($ValueOperator)
    {
      $this->ValueOperator = $ValueOperator;
      return $this;
    }

}
