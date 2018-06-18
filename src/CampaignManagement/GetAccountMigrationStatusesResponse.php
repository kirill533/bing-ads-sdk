<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAccountMigrationStatusesResponse
{

    /**
     * @var ArrayOfAccountMigrationStatusesInfo $MigrationStatuses
     */
    protected $MigrationStatuses = null;

    /**
     * @param ArrayOfAccountMigrationStatusesInfo $MigrationStatuses
     */
    public function __construct($MigrationStatuses)
    {
      $this->MigrationStatuses = $MigrationStatuses;
    }

    /**
     * @return ArrayOfAccountMigrationStatusesInfo
     */
    public function getMigrationStatuses()
    {
      return $this->MigrationStatuses;
    }

    /**
     * @param ArrayOfAccountMigrationStatusesInfo $MigrationStatuses
     * @return \PMG\BingAds\CampaignMangagement\GetAccountMigrationStatusesResponse
     */
    public function setMigrationStatuses($MigrationStatuses)
    {
      $this->MigrationStatuses = $MigrationStatuses;
      return $this;
    }

}
