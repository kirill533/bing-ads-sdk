<?php

namespace PMG\BingAds\Reporting;

class ArrayOfNegativeKeywordConflictReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NegativeKeywordConflictReportColumn[] $NegativeKeywordConflictReportColumn
     */
    protected $NegativeKeywordConflictReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NegativeKeywordConflictReportColumn[]
     */
    public function getNegativeKeywordConflictReportColumn()
    {
      return $this->NegativeKeywordConflictReportColumn;
    }

    /**
     * @param NegativeKeywordConflictReportColumn[] $NegativeKeywordConflictReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfNegativeKeywordConflictReportColumn
     */
    public function setNegativeKeywordConflictReportColumn(array $NegativeKeywordConflictReportColumn = null)
    {
      $this->NegativeKeywordConflictReportColumn = $NegativeKeywordConflictReportColumn;
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
      return isset($this->NegativeKeywordConflictReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NegativeKeywordConflictReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->NegativeKeywordConflictReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NegativeKeywordConflictReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NegativeKeywordConflictReportColumn[] = $value;
      } else {
        $this->NegativeKeywordConflictReportColumn[$offset] = $value;
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
      unset($this->NegativeKeywordConflictReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NegativeKeywordConflictReportColumn Return the current element
     */
    public function current()
    {
      return current($this->NegativeKeywordConflictReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NegativeKeywordConflictReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NegativeKeywordConflictReportColumn);
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
      reset($this->NegativeKeywordConflictReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return NegativeKeywordConflictReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->NegativeKeywordConflictReportColumn);
    }

}
