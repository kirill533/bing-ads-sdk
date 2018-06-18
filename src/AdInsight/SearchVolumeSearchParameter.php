<?php

namespace PMG\BingAds\AdInsight;

class SearchVolumeSearchParameter extends SearchParameter
{

    /**
     * @var int $Maximum
     */
    protected $Maximum = null;

    /**
     * @var int $Minimum
     */
    protected $Minimum = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getMaximum()
    {
      return $this->Maximum;
    }

    /**
     * @param int $Maximum
     * @return \PMG\BingAds\AdInsight\SearchVolumeSearchParameter
     */
    public function setMaximum($Maximum)
    {
      $this->Maximum = $Maximum;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimum()
    {
      return $this->Minimum;
    }

    /**
     * @param int $Minimum
     * @return \PMG\BingAds\AdInsight\SearchVolumeSearchParameter
     */
    public function setMinimum($Minimum)
    {
      $this->Minimum = $Minimum;
      return $this;
    }

}
