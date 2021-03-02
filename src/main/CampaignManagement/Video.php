<?php

namespace PMG\BingAds\CampaignManagement;

class Video
{

    /**
     * @var string $AspectRatio
     */
    protected $AspectRatio = null;

    /**
     * @var \DateTime $CreatedDateTimeInUTC
     */
    protected $CreatedDateTimeInUTC = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $DurationInMilliseconds
     */
    protected $DurationInMilliseconds = null;

    /**
     * @var string $FailureCode
     */
    protected $FailureCode = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $ModifiedDateTimeInUTC
     */
    protected $ModifiedDateTimeInUTC = null;

    /**
     * @var string $SourceUrl
     */
    protected $SourceUrl = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $ThumbnailUrl
     */
    protected $ThumbnailUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAspectRatio()
    {
        return $this->AspectRatio;
    }

    /**
     * @param string $AspectRatio
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setAspectRatio($AspectRatio)
    {
        $this->AspectRatio = $AspectRatio;
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
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setCreatedDateTimeInUTC(\DateTime $CreatedDateTimeInUTC = null)
    {
        $this->CreatedDateTimeInUTC = null === $CreatedDateTimeInUTC ? null : $CreatedDateTimeInUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationInMilliseconds()
    {
        return $this->DurationInMilliseconds;
    }

    /**
     * @param int $DurationInMilliseconds
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setDurationInMilliseconds($DurationInMilliseconds)
    {
        $this->DurationInMilliseconds = $DurationInMilliseconds;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureCode()
    {
        return $this->FailureCode;
    }

    /**
     * @param string $FailureCode
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setFailureCode($FailureCode)
    {
        $this->FailureCode = $FailureCode;
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
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDateTimeInUTC()
    {
        if (null === $this->ModifiedDateTimeInUTC) {
            return $this->ModifiedDateTimeInUTC;
        }
        try {
            return new \DateTime($this->ModifiedDateTimeInUTC);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $ModifiedDateTimeInUTC
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setModifiedDateTimeInUTC(\DateTime $ModifiedDateTimeInUTC = null)
    {
        $this->ModifiedDateTimeInUTC = null === $ModifiedDateTimeInUTC ? null : $ModifiedDateTimeInUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->SourceUrl;
    }

    /**
     * @param string $SourceUrl
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setSourceUrl($SourceUrl)
    {
        $this->SourceUrl = $SourceUrl;
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
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->ThumbnailUrl;
    }

    /**
     * @param string $ThumbnailUrl
     * @return \PMG\BingAds\CampaignManagement\Video
     */
    public function setThumbnailUrl($ThumbnailUrl)
    {
        $this->ThumbnailUrl = $ThumbnailUrl;
        return $this;
    }

}
