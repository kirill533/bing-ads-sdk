<?php

namespace PMG\BingAds\CampaignManagement;

class UrlGoal extends ConversionGoal
{

    /**
     * @var string $UrlExpression
     */
    protected $UrlExpression = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ExpressionOperator for valid values
     *
     * @var string $UrlOperator
     */
    protected $UrlOperator = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getUrlExpression()
    {
      return $this->UrlExpression;
    }

    /**
     * @param string $UrlExpression
     * @return \PMG\BingAds\CampaignManagement\UrlGoal
     */
    public function setUrlExpression($UrlExpression)
    {
      $this->UrlExpression = $UrlExpression;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlOperator()
    {
      return $this->UrlOperator;
    }

    /**
     * @param string $UrlOperator
     * @return \PMG\BingAds\CampaignManagement\UrlGoal
     */
    public function setUrlOperator($UrlOperator)
    {
      $this->UrlOperator = $UrlOperator;
      return $this;
    }

}
