<?php

namespace PMG\BingAds\AdInsight;

class NetworkCriterion extends Criterion
{

    /**
     * @var NetworkType $Network
     */
    protected $Network = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NetworkType
     */
    public function getNetwork()
    {
      return $this->Network;
    }

    /**
     * @param NetworkType $Network
     * @return \PMG\BingAds\AdInsight\NetworkCriterion
     */
    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

}
