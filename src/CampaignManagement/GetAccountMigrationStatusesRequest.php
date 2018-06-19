<?php

namespace PMG\BingAds\CampaignManagement;

class GetAccountMigrationStatusesRequest
{

    /**
     * @var ArrayOflong $AccountIds
     */
    protected $AccountIds = null;

    /**
     * @var string $MigrationType
     */
    protected $MigrationType = null;

    /**
     * @param ArrayOflong $AccountIds
     * @param string $MigrationType
     */
    public function __construct($AccountIds, $MigrationType)
    {
      $this->AccountIds = $AccountIds;
      $this->MigrationType = $MigrationType;
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
     * @return \PMG\BingAds\CampaignManagement\GetAccountMigrationStatusesRequest
     */
    public function setAccountIds($AccountIds)
    {
      $this->AccountIds = $AccountIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getMigrationType()
    {
      return $this->MigrationType;
    }

    /**
     * @param string $MigrationType
     * @return \PMG\BingAds\CampaignManagement\GetAccountMigrationStatusesRequest
     */
    public function setMigrationType($MigrationType)
    {
      $this->MigrationType = $MigrationType;
      return $this;
    }

}
