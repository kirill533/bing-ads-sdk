<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordIdeasRequest
{

    /**
     * @var boolean $ExpandIdeas
     */
    protected $ExpandIdeas = null;

    /**
     * @var ArrayOfKeywordIdeaAttribute $IdeaAttributes
     */
    protected $IdeaAttributes = null;

    /**
     * @var ArrayOfSearchParameter $SearchParameters
     */
    protected $SearchParameters = null;

    /**
     * @param boolean $ExpandIdeas
     * @param ArrayOfKeywordIdeaAttribute $IdeaAttributes
     * @param ArrayOfSearchParameter $SearchParameters
     */
    public function __construct($ExpandIdeas, $IdeaAttributes, $SearchParameters)
    {
      $this->ExpandIdeas = $ExpandIdeas;
      $this->IdeaAttributes = $IdeaAttributes;
      $this->SearchParameters = $SearchParameters;
    }

    /**
     * @return boolean
     */
    public function getExpandIdeas()
    {
      return $this->ExpandIdeas;
    }

    /**
     * @param boolean $ExpandIdeas
     * @return \PMG\BingAds\AdInsight\GetKeywordIdeasRequest
     */
    public function setExpandIdeas($ExpandIdeas)
    {
      $this->ExpandIdeas = $ExpandIdeas;
      return $this;
    }

    /**
     * @return ArrayOfKeywordIdeaAttribute
     */
    public function getIdeaAttributes()
    {
      return $this->IdeaAttributes;
    }

    /**
     * @param ArrayOfKeywordIdeaAttribute $IdeaAttributes
     * @return \PMG\BingAds\AdInsight\GetKeywordIdeasRequest
     */
    public function setIdeaAttributes($IdeaAttributes)
    {
      $this->IdeaAttributes = $IdeaAttributes;
      return $this;
    }

    /**
     * @return ArrayOfSearchParameter
     */
    public function getSearchParameters()
    {
      return $this->SearchParameters;
    }

    /**
     * @param ArrayOfSearchParameter $SearchParameters
     * @return \PMG\BingAds\AdInsight\GetKeywordIdeasRequest
     */
    public function setSearchParameters($SearchParameters)
    {
      $this->SearchParameters = $SearchParameters;
      return $this;
    }

}
