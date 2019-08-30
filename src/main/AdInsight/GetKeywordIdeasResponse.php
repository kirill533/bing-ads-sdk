<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordIdeasResponse
{

    /**
     * @var ArrayOfKeywordIdea $KeywordIdeas
     */
    protected $KeywordIdeas = null;

    /**
     * @param ArrayOfKeywordIdea $KeywordIdeas
     */
    public function __construct($KeywordIdeas = null)
    {
    $this->KeywordIdeas = $KeywordIdeas;
    }

    /**
     * @return ArrayOfKeywordIdea
     */
    public function getKeywordIdeas()
    {
        return $this->KeywordIdeas;
    }

    /**
     * @param ArrayOfKeywordIdea $KeywordIdeas
     * @return \PMG\BingAds\AdInsight\GetKeywordIdeasResponse
     */
    public function setKeywordIdeas($KeywordIdeas)
    {
        $this->KeywordIdeas = $KeywordIdeas;
        return $this;
    }

}
