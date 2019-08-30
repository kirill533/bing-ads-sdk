<?php

namespace PMG\BingAds\CustomerBilling;

class Paging
{

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->Index;
    }

    /**
     * @param int $Index
     * @return \PMG\BingAds\CustomerBilling\Paging
     */
    public function setIndex($Index)
    {
        $this->Index = $Index;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return \PMG\BingAds\CustomerBilling\Paging
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
        return $this;
    }

}
