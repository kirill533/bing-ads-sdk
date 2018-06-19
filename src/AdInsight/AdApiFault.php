<?php

namespace PMG\BingAds\AdInsight;

class AdApiFault extends ApplicationFault
{

    /**
     * @var ArrayOfAdApiError $Errors
     */
    protected $Errors = null;

    /**
     * @return ArrayOfAdApiError
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfAdApiError $Errors
     * @return \PMG\BingAds\AdInsight\AdApiFault
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
