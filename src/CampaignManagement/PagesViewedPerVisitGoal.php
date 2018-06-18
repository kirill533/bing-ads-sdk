<?php

namespace PMG\BingAds\CampaignMangagement;

class PagesViewedPerVisitGoal extends ConversionGoal
{

    /**
     * @var int $MinimumPagesViewed
     */
    protected $MinimumPagesViewed = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getMinimumPagesViewed()
    {
      return $this->MinimumPagesViewed;
    }

    /**
     * @param int $MinimumPagesViewed
     * @return \PMG\BingAds\CampaignMangagement\PagesViewedPerVisitGoal
     */
    public function setMinimumPagesViewed($MinimumPagesViewed)
    {
      $this->MinimumPagesViewed = $MinimumPagesViewed;
      return $this;
    }

}
