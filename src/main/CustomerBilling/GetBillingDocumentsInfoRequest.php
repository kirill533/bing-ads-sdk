<?php

namespace PMG\BingAds\CustomerBilling;

class GetBillingDocumentsInfoRequest
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param ArrayOflong $AccountIds
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     */
    public function __construct($AccountIds = null, \DateTime $StartDate = null, \DateTime $EndDate = null)
    {
    $this->AccountIds = $AccountIds;
        $this->StartDate = null === $StartDate ? null : $StartDate->format(\DateTime::ATOM);
        $this->EndDate = null === $EndDate ? null : $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return ArrayOflong
     */
    public function getAccountIds()
    {
        return $this->AccountIds;
    }

    /**
     * @param ArrayOflong $AccountIds
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoRequest
     */
    public function setAccountIds($AccountIds)
    {
        $this->AccountIds = $AccountIds;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if (null === $this->StartDate) {
            return $this->StartDate;
        }
        try {
            return new \DateTime($this->StartDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoRequest
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if (null === $this->EndDate) {
            return $this->EndDate;
        }
        try {
            return new \DateTime($this->EndDate);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \PMG\BingAds\CustomerBilling\GetBillingDocumentsInfoRequest
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

}
