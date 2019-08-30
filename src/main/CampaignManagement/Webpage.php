<?php

namespace PMG\BingAds\CampaignManagement;

class Webpage extends Criterion
{

    /**
     * @var WebpageParameter $Parameter
     */
    protected $Parameter = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return WebpageParameter
     */
    public function getParameter()
    {
        return $this->Parameter;
    }

    /**
     * @param WebpageParameter $Parameter
     * @return \PMG\BingAds\CampaignManagement\Webpage
     */
    public function setParameter($Parameter)
    {
        $this->Parameter = $Parameter;
        return $this;
    }

}
