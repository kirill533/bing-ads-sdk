<?php

namespace PMG\BingAds\AdInsight;

class PutMetricDataRequest
{

    /**
     * @var ArrayOfMetricData $Metrics
     */
    protected $Metrics = null;

    /**
     * @param ArrayOfMetricData $Metrics
     */
    public function __construct($Metrics = null)
    {
    $this->Metrics = $Metrics;
    }

    /**
     * @return ArrayOfMetricData
     */
    public function getMetrics()
    {
        return $this->Metrics;
    }

    /**
     * @param ArrayOfMetricData $Metrics
     * @return \PMG\BingAds\AdInsight\PutMetricDataRequest
     */
    public function setMetrics($Metrics)
    {
        $this->Metrics = $Metrics;
        return $this;
    }

}
