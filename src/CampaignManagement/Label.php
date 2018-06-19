<?php

namespace PMG\BingAds\CampaignManagement;

class Label
{

    /**
     * @var string $ColorCode
     */
    protected $ColorCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getColorCode()
    {
      return $this->ColorCode;
    }

    /**
     * @param string $ColorCode
     * @return \PMG\BingAds\CampaignManagement\Label
     */
    public function setColorCode($ColorCode)
    {
      $this->ColorCode = $ColorCode;
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
     * @return \PMG\BingAds\CampaignManagement\Label
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \PMG\BingAds\CampaignManagement\Label
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \PMG\BingAds\CampaignManagement\Label
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
