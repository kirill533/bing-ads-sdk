<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdGroupReportScope implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdGroupReportScope[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupReportScope ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupReportScope Return count of elements
     */
    public function count()
    {
        return is_array($this->AdGroupReportScope) ? count($this->AdGroupReportScope) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupReportScope[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupReportScope)
    {
        $prev = $this->AdGroupReportScope;
        $this->AdGroupReportScope = $AdGroupReportScope;
        return $prev;
    }

}
