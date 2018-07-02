<?php

namespace PMG\BingAds\CustomerManagement;

class AddClientLinksResponse
{

    /**
     * @var ArrayOfOperationError $OperationErrors
     */
    protected $OperationErrors = null;

    /**
     * @var ArrayOfArrayOfOperationError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfOperationError $OperationErrors
     * @param ArrayOfArrayOfOperationError $PartialErrors
     */
    public function __construct($OperationErrors = null, $PartialErrors = null)
    {
      $this->OperationErrors = $OperationErrors;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CustomerManagement\AddClientLinksResponse
     */
    public function setOperationErrors($OperationErrors)
    {
      $this->OperationErrors = $OperationErrors;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfOperationError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfArrayOfOperationError $PartialErrors
     * @return \PMG\BingAds\CustomerManagement\AddClientLinksResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
