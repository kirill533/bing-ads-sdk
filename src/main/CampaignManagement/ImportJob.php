<?php

namespace PMG\BingAds\CampaignManagement;

class ImportJob
{

    /**
     * @var int $CreatedByUserId
     */
    protected $CreatedByUserId = null;

    /**
     * @var string $CreatedByUserName
     */
    protected $CreatedByUserName = null;

    /**
     * @var \DateTime $CreatedDateTimeInUTC
     */
    protected $CreatedDateTimeInUTC = null;

    /**
     * @var Frequency $Frequency
     */
    protected $Frequency = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var ImportOption $ImportOption
     */
    protected $ImportOption = null;

    /**
     * @var \DateTime $LastRunTimeInUTC
     */
    protected $LastRunTimeInUTC = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NotificationEmail
     */
    protected $NotificationEmail = null;

    /**
     * @var string $NotificationType
     */
    protected $NotificationType = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCreatedByUserId()
    {
        return $this->CreatedByUserId;
    }

    /**
     * @param int $CreatedByUserId
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setCreatedByUserId($CreatedByUserId)
    {
        $this->CreatedByUserId = $CreatedByUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByUserName()
    {
        return $this->CreatedByUserName;
    }

    /**
     * @param string $CreatedByUserName
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setCreatedByUserName($CreatedByUserName)
    {
        $this->CreatedByUserName = $CreatedByUserName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateTimeInUTC()
    {
        if (null === $this->CreatedDateTimeInUTC) {
            return $this->CreatedDateTimeInUTC;
        }
        try {
            return new \DateTime($this->CreatedDateTimeInUTC);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $CreatedDateTimeInUTC
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setCreatedDateTimeInUTC(\DateTime $CreatedDateTimeInUTC = null)
    {
        $this->CreatedDateTimeInUTC = null === $CreatedDateTimeInUTC ? null : $CreatedDateTimeInUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return Frequency
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }

    /**
     * @param Frequency $Frequency
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setFrequency($Frequency)
    {
        $this->Frequency = $Frequency;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return ImportOption
     */
    public function getImportOption()
    {
        return $this->ImportOption;
    }

    /**
     * @param ImportOption $ImportOption
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setImportOption($ImportOption)
    {
        $this->ImportOption = $ImportOption;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastRunTimeInUTC()
    {
        if (null === $this->LastRunTimeInUTC) {
            return $this->LastRunTimeInUTC;
        }
        try {
            return new \DateTime($this->LastRunTimeInUTC);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $LastRunTimeInUTC
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setLastRunTimeInUTC(\DateTime $LastRunTimeInUTC = null)
    {
        $this->LastRunTimeInUTC = null === $LastRunTimeInUTC ? null : $LastRunTimeInUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->NotificationEmail;
    }

    /**
     * @param string $NotificationEmail
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setNotificationEmail($NotificationEmail)
    {
        $this->NotificationEmail = $NotificationEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }

    /**
     * @param string $NotificationType
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setNotificationType($NotificationType)
    {
        $this->NotificationType = $NotificationType;
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
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\ImportJob
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
