<?php

namespace PMG\BingAds\CustomerBilling;

class ApiBatchFault extends ApiFault
{

    /**
     * @var ArrayOfBatchError $BatchErrors
     */
    protected $BatchErrors = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getBatchErrors()
    {
        return $this->BatchErrors;
    }

    /**
     * @param ArrayOfBatchError $BatchErrors
     * @return \PMG\BingAds\CustomerBilling\ApiBatchFault
     */
    public function setBatchErrors($BatchErrors)
    {
        $this->BatchErrors = $BatchErrors;
        return $this;
    }

}
