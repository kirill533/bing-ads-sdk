<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdGroupReportScope implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupReportScope[] $AdGroupReportScope
     */
    protected $AdGroupReportScope = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupReportScope[]
     */
    public function getAdGroupReportScope()
    {
      return $this->AdGroupReportScope;
    }

    /**
     * @param AdGroupReportScope[] $AdGroupReportScope
     * @return \PMG\BingAds\Reporting\ArrayOfAdGroupReportScope
     */
    public function setAdGroupReportScope(array $AdGroupReportScope = null)
    {
      $this->AdGroupReportScope = $AdGroupReportScope;
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
      return isset($this->AdGroupReportScope[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupReportScope
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupReportScope[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupReportScope $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupReportScope[] = $value;
      } else {
        $this->AdGroupReportScope[$offset] = $value;
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
      unset($this->AdGroupReportScope[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupReportScope Return the current element
     */
    public function current()
    {
      return current($this->AdGroupReportScope);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupReportScope);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupReportScope);
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
      reset($this->AdGroupReportScope);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupReportScope Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupReportScope);
    }

}
