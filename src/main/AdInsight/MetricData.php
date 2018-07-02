<?php

namespace PMG\BingAds\AdInsight;

class MetricData
{

    /**
     * @var string $MetricDetail
     */
    protected $MetricDetail = null;

    /**
     * @var string $MetricType
     */
    protected $MetricType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMetricDetail()
    {
      return $this->MetricDetail;
    }

    /**
     * @param string $MetricDetail
     * @return \PMG\BingAds\AdInsight\MetricData
     */
    public function setMetricDetail($MetricDetail)
    {
      $this->MetricDetail = $MetricDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetricType()
    {
      return $this->MetricType;
    }

    /**
     * @param string $MetricType
     * @return \PMG\BingAds\AdInsight\MetricData
     */
    public function setMetricType($MetricType)
    {
      $this->MetricType = $MetricType;
      return $this;
    }

}
