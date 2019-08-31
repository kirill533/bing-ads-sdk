<?php

namespace PMG\BingAds\Reporting;

class ArrayOfNegativeKeywordConflictReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return NegativeKeywordConflictReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->NegativeKeywordConflictReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return NegativeKeywordConflictReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $NegativeKeywordConflictReportColumn)
    {
        $prev = $this->NegativeKeywordConflictReportColumn;
        $this->NegativeKeywordConflictReportColumn = $NegativeKeywordConflictReportColumn;
        return $prev;
    }

}
