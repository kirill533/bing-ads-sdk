<?php

namespace PMG\BingAds\AdInsight;

class NetworkSearchParameter extends SearchParameter
{

    /**
     * @var NetworkCriterion $Network
     */
    protected $Network = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NetworkCriterion
     */
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * @param NetworkCriterion $Network
     * @return \PMG\BingAds\AdInsight\NetworkSearchParameter
     */
    public function setNetwork($Network)
    {
        $this->Network = $Network;
        return $this;
    }

}
