<?php

namespace PMG\BingAds\CampaignMangagement;

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

    /**
     * @param int $Index
     * @param int $Size
     */
    public function __construct($Index, $Size)
    {
      $this->Index = $Index;
      $this->Size = $Size;
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
     * @return \PMG\BingAds\CampaignMangagement\Paging
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
     * @return \PMG\BingAds\CampaignMangagement\Paging
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

}
