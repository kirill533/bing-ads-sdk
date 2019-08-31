<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordIdeaCategoriesResponse
{

    /**
     * @var ArrayOfKeywordIdeaCategory $KeywordIdeaCategories
     */
    protected $KeywordIdeaCategories = null;

    /**
     * @param ArrayOfKeywordIdeaCategory $KeywordIdeaCategories
     */
    public function __construct($KeywordIdeaCategories = null)
    {
    $this->KeywordIdeaCategories = $KeywordIdeaCategories;
    }

    /**
     * @return ArrayOfKeywordIdeaCategory
     */
    public function getKeywordIdeaCategories()
    {
        return $this->KeywordIdeaCategories;
    }

    /**
     * @param ArrayOfKeywordIdeaCategory $KeywordIdeaCategories
     * @return \PMG\BingAds\AdInsight\GetKeywordIdeaCategoriesResponse
     */
    public function setKeywordIdeaCategories($KeywordIdeaCategories)
    {
        $this->KeywordIdeaCategories = $KeywordIdeaCategories;
        return $this;
    }

}
