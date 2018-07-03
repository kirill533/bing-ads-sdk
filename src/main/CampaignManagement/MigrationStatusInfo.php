<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @see \PMG\BingAds\CampaignManagement\MigrationStatus for valid values
     *
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param string $Status
     */
    public function __construct($Status = null)
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
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
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
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
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
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
