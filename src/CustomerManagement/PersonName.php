<?php

namespace PMG\BingAds\CustomerManagement;

class PersonName
{

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $MiddleInitial
     */
    protected $MiddleInitial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \PMG\BingAds\CustomerManagement\PersonName
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \PMG\BingAds\CustomerManagement\PersonName
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddleInitial()
    {
      return $this->MiddleInitial;
    }

    /**
     * @param string $MiddleInitial
     * @return \PMG\BingAds\CustomerManagement\PersonName
     */
    public function setMiddleInitial($MiddleInitial)
    {
      $this->MiddleInitial = $MiddleInitial;
      return $this;
    }

}
