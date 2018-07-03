<?php

namespace PMG\BingAds\AdInsight;

class NetworkCriterion extends Criterion
{

    /**
     * @see \PMG\BingAds\AdInsight\NetworkType for valid values
     *
     * @var string $Network
     */
    protected $Network = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
      return $this->Network;
    }

    /**
     * @param string $Network
     * @return \PMG\BingAds\AdInsight\NetworkCriterion
     */
    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

}
