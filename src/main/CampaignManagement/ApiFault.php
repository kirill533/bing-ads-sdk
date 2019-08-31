<?php

namespace PMG\BingAds\CampaignManagement;

class ApiFault extends ApplicationFault
{

    /**
     * @var ArrayOfBatchError $BatchErrors
     */
    protected $BatchErrors = null;

    /**
     * @var ArrayOfOperationError $OperationErrors
     */
    protected $OperationErrors = null;

    /**
     * @return ArrayOfBatchError
     */
    public function getBatchErrors()
    {
        return $this->BatchErrors;
    }

    /**
     * @param ArrayOfBatchError $BatchErrors
     * @return \PMG\BingAds\CampaignManagement\ApiFault
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
     * @return \PMG\BingAds\CampaignManagement\ApiFault
     */
    public function setOperationErrors($OperationErrors)
    {
        $this->OperationErrors = $OperationErrors;
        return $this;
    }

}
