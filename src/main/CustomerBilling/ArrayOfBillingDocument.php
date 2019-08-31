<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfBillingDocument implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BillingDocument[] $BillingDocument
     */
    protected $BillingDocument = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BillingDocument[]
     */
    public function getBillingDocument()
    {
        return $this->BillingDocument;
    }

    /**
     * @param BillingDocument[] $BillingDocument
     * @return \PMG\BingAds\CustomerBilling\ArrayOfBillingDocument
     */
    public function setBillingDocument(array $BillingDocument = null)
    {
        $this->BillingDocument = $BillingDocument;
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
      return isset($this->BillingDocument[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BillingDocument
     */
    public function offsetGet($offset)
    {
      return $this->BillingDocument[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BillingDocument $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BillingDocument[] = $value;
      } else {
        $this->BillingDocument[$offset] = $value;
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
      unset($this->BillingDocument[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BillingDocument[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BillingDocument);
    }

    /**
     * Countable implementation
     *
     * @return BillingDocument Return count of elements
     */
    public function count()
    {
      return count($this->BillingDocument);
    }

    /**
     * Change the current array with another
     *
     * @return BillingDocument[]|null The previous array if present
     */
    public function exchangeArray(array $BillingDocument)
    {
        $prev = $this->BillingDocument;
        $this->BillingDocument = $BillingDocument;
        return $prev;
    }

}
