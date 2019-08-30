<?php

namespace PMG\BingAds\AdInsight;

class SuggestedBidSearchParameter extends SearchParameter
{

    /**
     * @var float $Maximum
     */
    protected $Maximum = null;

    /**
     * @var float $Minimum
     */
    protected $Minimum = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getMaximum()
    {
        return $this->Maximum;
    }

    /**
     * @param float $Maximum
     * @return \PMG\BingAds\AdInsight\SuggestedBidSearchParameter
     */
    public function setMaximum($Maximum)
    {
        $this->Maximum = $Maximum;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinimum()
    {
        return $this->Minimum;
    }

    /**
     * @param float $Minimum
     * @return \PMG\BingAds\AdInsight\SuggestedBidSearchParameter
     */
    public function setMinimum($Minimum)
    {
        $this->Minimum = $Minimum;
        return $this;
    }

}
