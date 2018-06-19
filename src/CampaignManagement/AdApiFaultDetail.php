<?php

namespace PMG\BingAds\CampaignManagement;

class AdApiFaultDetail extends ApplicationFault
{

    /**
     * @var ArrayOfAdApiError $Errors
     */
    protected $Errors = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfAdApiError
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfAdApiError $Errors
     * @return \PMG\BingAds\CampaignManagement\AdApiFaultDetail
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
