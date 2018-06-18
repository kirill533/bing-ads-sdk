<?php

namespace PMG\BingAds\AdInsight;

class IdeaTextSearchParameter extends SearchParameter
{

    /**
     * @var ArrayOfKeyword $Excluded
     */
    protected $Excluded = null;

    /**
     * @var ArrayOfKeyword $Included
     */
    protected $Included = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfKeyword
     */
    public function getExcluded()
    {
      return $this->Excluded;
    }

    /**
     * @param ArrayOfKeyword $Excluded
     * @return \PMG\BingAds\AdInsight\IdeaTextSearchParameter
     */
    public function setExcluded($Excluded)
    {
      $this->Excluded = $Excluded;
      return $this;
    }

    /**
     * @return ArrayOfKeyword
     */
    public function getIncluded()
    {
      return $this->Included;
    }

    /**
     * @param ArrayOfKeyword $Included
     * @return \PMG\BingAds\AdInsight\IdeaTextSearchParameter
     */
    public function setIncluded($Included)
    {
      $this->Included = $Included;
      return $this;
    }

}
