<?php

namespace PMG\BingAds\AdInsight;

class ApiFaultDetail extends ApplicationFault
{

    /**
     * @var ArrayOfBatchError $BatchErrors
     */
    protected $BatchErrors = null;

    /**
     * @var ArrayOfOperationError $OperationErrors
     */
    protected $OperationErrors = null;

    
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
     * @return \PMG\BingAds\AdInsight\ApiFaultDetail
     */
    public function setBatchErrors($BatchErrors)
    {
      $this->BatchErrors = $BatchErrors;
      return $this;
    }

    /**
     * @return ArrayOfOperationError
     */
    public function getOperationErrors()
    {
      return $this->OperationErrors;
    }

    /**
     * @param ArrayOfOperationError $OperationErrors
     * @return \PMG\BingAds\AdInsight\ApiFaultDetail
     */
    public function setOperationErrors($OperationErrors)
    {
      $this->OperationErrors = $OperationErrors;
      return $this;
    }

}
