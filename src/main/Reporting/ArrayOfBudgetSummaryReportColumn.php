<?php

namespace PMG\BingAds\Reporting;

class ArrayOfBudgetSummaryReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BudgetSummaryReportColumn[] $BudgetSummaryReportColumn
     */
    protected $BudgetSummaryReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetSummaryReportColumn[]
     */
    public function getBudgetSummaryReportColumn()
    {
        return $this->BudgetSummaryReportColumn;
    }

    /**
     * @param BudgetSummaryReportColumn[] $BudgetSummaryReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfBudgetSummaryReportColumn
     */
    public function setBudgetSummaryReportColumn(array $BudgetSummaryReportColumn = null)
    {
        $this->BudgetSummaryReportColumn = $BudgetSummaryReportColumn;
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
      return isset($this->BudgetSummaryReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetSummaryReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->BudgetSummaryReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetSummaryReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BudgetSummaryReportColumn[] = $value;
      } else {
        $this->BudgetSummaryReportColumn[$offset] = $value;
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
      unset($this->BudgetSummaryReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BudgetSummaryReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BudgetSummaryReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BudgetSummaryReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->BudgetSummaryReportColumn) ? count($this->BudgetSummaryReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BudgetSummaryReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $BudgetSummaryReportColumn)
    {
        $prev = $this->BudgetSummaryReportColumn;
        $this->BudgetSummaryReportColumn = $BudgetSummaryReportColumn;
        return $prev;
    }

}
