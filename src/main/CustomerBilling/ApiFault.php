<?php

namespace PMG\BingAds\CustomerBilling;

class ApiFault extends ApplicationFault
{

    /**
     * @var ArrayOfOperationError $OperationErrors
     */
    protected $OperationErrors = null;

    /**
     * @return ArrayOfOperationError
     */
    public function getOperationErrors()
    {
        return $this->OperationErrors;
    }

    /**
     * @param ArrayOfOperationError $OperationErrors
     * @return \PMG\BingAds\CustomerBilling\ApiFault
     */
    public function setOperationErrors($OperationErrors)
    {
        $this->OperationErrors = $OperationErrors;
        return $this;
    }

}
