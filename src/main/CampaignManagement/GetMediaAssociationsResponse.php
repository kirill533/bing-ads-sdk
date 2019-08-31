<?php

namespace PMG\BingAds\CampaignManagement;

class GetMediaAssociationsResponse
{

    /**
     * @var ArrayOfArrayOfMediaAssociation $MediaAssociations
     */
    protected $MediaAssociations = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfArrayOfMediaAssociation $MediaAssociations
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($MediaAssociations = null, $PartialErrors = null)
    {
    $this->MediaAssociations = $MediaAssociations;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfArrayOfMediaAssociation
     */
    public function getMediaAssociations()
    {
        return $this->MediaAssociations;
    }

    /**
     * @param ArrayOfArrayOfMediaAssociation $MediaAssociations
     * @return \PMG\BingAds\CampaignManagement\GetMediaAssociationsResponse
     */
    public function setMediaAssociations($MediaAssociations)
    {
        $this->MediaAssociations = $MediaAssociations;
        return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
        return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignManagement\GetMediaAssociationsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
