<?php

namespace PMG\BingAds\CampaignManagement;

class EditorialApiFault extends ApplicationFault
{

    /**
     * @var ArrayOfBatchError $BatchErrors
     */
    protected $BatchErrors = null;

    /**
     * @var ArrayOfEditorialError $EditorialErrors
     */
    protected $EditorialErrors = null;

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
     * @return \PMG\BingAds\CampaignManagement\EditorialApiFault
     */
    public function setBatchErrors($BatchErrors)
    {
        $this->BatchErrors = $BatchErrors;
        return $this;
    }

    /**
     * @return ArrayOfEditorialError
     */
    public function getEditorialErrors()
    {
        return $this->EditorialErrors;
    }

    /**
     * @param ArrayOfEditorialError $EditorialErrors
     * @return \PMG\BingAds\CampaignManagement\EditorialApiFault
     */
    public function setEditorialErrors($EditorialErrors)
    {
        $this->EditorialErrors = $EditorialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\EditorialApiFault
     */
    public function setOperationErrors($OperationErrors)
    {
        $this->OperationErrors = $OperationErrors;
        return $this;
    }

}
