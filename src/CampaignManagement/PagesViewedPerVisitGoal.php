<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @return \PMG\BingAds\CampaignManagement\PagesViewedPerVisitGoal
     */
    public function setMinimumPagesViewed($MinimumPagesViewed)
    {
      $this->MinimumPagesViewed = $MinimumPagesViewed;
      return $this;
    }

}
