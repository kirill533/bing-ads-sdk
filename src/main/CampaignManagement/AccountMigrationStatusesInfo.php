<?php

namespace PMG\BingAds\CampaignManagement;

class AccountMigrationStatusesInfo
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfMigrationStatusInfo $MigrationStatusInfos
     */
    protected $MigrationStatusInfos = null;

    /**
     * @param int $AccountId
     */
    public function __construct($AccountId = null)
    {
      $this->AccountId = $AccountId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\AccountMigrationStatusesInfo
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOfMigrationStatusInfo
     */
    public function getMigrationStatusInfos()
    {
      return $this->MigrationStatusInfos;
    }

    /**
     * @param ArrayOfMigrationStatusInfo $MigrationStatusInfos
     * @return \PMG\BingAds\CampaignManagement\AccountMigrationStatusesInfo
     */
    public function setMigrationStatusInfos($MigrationStatusInfos)
    {
      $this->MigrationStatusInfos = $MigrationStatusInfos;
      return $this;
    }

}
