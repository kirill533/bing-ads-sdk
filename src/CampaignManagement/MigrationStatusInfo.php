<?php

namespace PMG\BingAds\CampaignMangagement;

class MigrationStatusInfo
{

    /**
     * @var string $MigrationType
     */
    protected $MigrationType = null;

    /**
     * @var \DateTime $StartTimeInUtc
     */
    protected $StartTimeInUtc = null;

    /**
     * @var MigrationStatus $Status
     */
    protected $Status = null;

    /**
     * @param MigrationStatus $Status
     */
    public function __construct($Status)
    {
      $this->Status = $Status;
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
     * @return \PMG\BingAds\CampaignMangagement\MigrationStatusInfo
     */
    public function setMigrationType($MigrationType)
    {
      $this->MigrationType = $MigrationType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeInUtc()
    {
      if ($this->StartTimeInUtc == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTimeInUtc);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTimeInUtc
     * @return \PMG\BingAds\CampaignMangagement\MigrationStatusInfo
     */
    public function setStartTimeInUtc(\DateTime $StartTimeInUtc = null)
    {
      if ($StartTimeInUtc == null) {
       $this->StartTimeInUtc = null;
      } else {
        $this->StartTimeInUtc = $StartTimeInUtc->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return MigrationStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param MigrationStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\MigrationStatusInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
