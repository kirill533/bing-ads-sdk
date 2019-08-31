<?php

namespace PMG\BingAds\AdInsight;

class CategorySearchParameter extends SearchParameter
{

    /**
     * @var int $CategoryId
     */
    protected $CategoryId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->CategoryId;
    }

    /**
     * @param int $CategoryId
     * @return \PMG\BingAds\AdInsight\CategorySearchParameter
     */
    public function setCategoryId($CategoryId)
    {
        $this->CategoryId = $CategoryId;
        return $this;
    }

}
