<?php

namespace PMG\BingAds\AdInsight;

class GetDomainCategoriesResponse
{

    /**
     * @var ArrayOfDomainCategory $Categories
     */
    protected $Categories = null;

    /**
     * @param ArrayOfDomainCategory $Categories
     */
    public function __construct($Categories = null)
    {
    $this->Categories = $Categories;
    }

    /**
     * @return ArrayOfDomainCategory
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param ArrayOfDomainCategory $Categories
     * @return \PMG\BingAds\AdInsight\GetDomainCategoriesResponse
     */
    public function setCategories($Categories)
    {
        $this->Categories = $Categories;
        return $this;
    }

}
