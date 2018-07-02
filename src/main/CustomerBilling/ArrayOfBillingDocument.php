<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfBillingDocument implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return BillingDocument Return the current element
     */
    public function current()
    {
      return current($this->BillingDocument);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BillingDocument);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BillingDocument);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->BillingDocument);
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

}
