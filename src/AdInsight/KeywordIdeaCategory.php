<?php

namespace PMG\BingAds\AdInsight;

class KeywordIdeaCategory
{

    /**
     * @var int $CategoryId
     */
    protected $CategoryId = null;

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    
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
     * @return \PMG\BingAds\AdInsight\KeywordIdeaCategory
     */
    public function setCategoryId($CategoryId)
    {
      $this->CategoryId = $CategoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return \PMG\BingAds\AdInsight\KeywordIdeaCategory
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
      return $this;
    }

}
