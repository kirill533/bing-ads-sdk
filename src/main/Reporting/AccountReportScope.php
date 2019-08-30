<?php

namespace PMG\BingAds\Reporting;

class AccountReportScope
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\Reporting\AccountReportScope
     */
    public function setAccountIds($AccountIds)
    {
        $this->AccountIds = $AccountIds;
        return $this;
    }

}
