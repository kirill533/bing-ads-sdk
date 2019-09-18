<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCustomerAccountShareAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CustomerAccountShareAssociation[] $CustomerAccountShareAssociation
     */
    protected $CustomerAccountShareAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerAccountShareAssociation[]
     */
    public function getCustomerAccountShareAssociation()
    {
        return $this->CustomerAccountShareAssociation;
    }

    /**
     * @param CustomerAccountShareAssociation[] $CustomerAccountShareAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCustomerAccountShareAssociation
     */
    public function setCustomerAccountShareAssociation(array $CustomerAccountShareAssociation = null)
    {
        $this->CustomerAccountShareAssociation = $CustomerAccountShareAssociation;
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
      return isset($this->CustomerAccountShareAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerAccountShareAssociation
     */
    public function offsetGet($offset)
    {
      return $this->CustomerAccountShareAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerAccountShareAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerAccountShareAssociation[] = $value;
      } else {
        $this->CustomerAccountShareAssociation[$offset] = $value;
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
      unset($this->CustomerAccountShareAssociation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CustomerAccountShareAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CustomerAccountShareAssociation);
    }

    /**
     * Countable implementation
     *
     * @return CustomerAccountShareAssociation Return count of elements
     */
    public function count()
    {
      return count($this->CustomerAccountShareAssociation);
    }

    /**
     * Change the current array with another
     *
     * @return CustomerAccountShareAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $CustomerAccountShareAssociation)
    {
        $prev = $this->CustomerAccountShareAssociation;
        $this->CustomerAccountShareAssociation = $CustomerAccountShareAssociation;
        return $prev;
    }

}
