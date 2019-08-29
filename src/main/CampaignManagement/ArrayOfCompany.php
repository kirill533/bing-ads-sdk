<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCompany implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Company[] $Company
     */
    protected $Company = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Company[]
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param Company[] $Company
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCompany
     */
    public function setCompany(array $Company = null)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Company[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Company
     */
    public function offsetGet($offset)
    {
      return $this->Company[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Company $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Company[] = $value;
      } else {
        $this->Company[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Company[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Company[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Company);
    }

    /**
     * Countable implementation
     *
     * @return Company Return count of elements
     */
    public function count()
    {
      return count($this->Company);
    }

    /**
     * Change the current array with another
     *
     * @return Company[]|null The previous array if present
     */
    public function exchangeArray(array $Company)
    {
        $prev = $this->Company;
        $this->Company = $Company;
        return $prev;
    }

}
