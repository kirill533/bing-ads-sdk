<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCompetitionLevel implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CompetitionLevel[] $CompetitionLevel
     */
    protected $CompetitionLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompetitionLevel[]
     */
    public function getCompetitionLevel()
    {
        return $this->CompetitionLevel;
    }

    /**
     * @param CompetitionLevel[] $CompetitionLevel
     * @return \PMG\BingAds\AdInsight\ArrayOfCompetitionLevel
     */
    public function setCompetitionLevel(array $CompetitionLevel = null)
    {
        $this->CompetitionLevel = $CompetitionLevel;
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
      return isset($this->CompetitionLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompetitionLevel
     */
    public function offsetGet($offset)
    {
      return $this->CompetitionLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompetitionLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CompetitionLevel[] = $value;
      } else {
        $this->CompetitionLevel[$offset] = $value;
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
      unset($this->CompetitionLevel[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CompetitionLevel[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CompetitionLevel ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CompetitionLevel Return count of elements
     */
    public function count()
    {
        return is_array($this->CompetitionLevel) ? count($this->CompetitionLevel) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CompetitionLevel[]|null The previous array if present
     */
    public function exchangeArray(array $CompetitionLevel)
    {
        $prev = $this->CompetitionLevel;
        $this->CompetitionLevel = $CompetitionLevel;
        return $prev;
    }

}
