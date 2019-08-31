<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfLabelAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var LabelAssociation[] $LabelAssociation
     */
    protected $LabelAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LabelAssociation[]
     */
    public function getLabelAssociation()
    {
        return $this->LabelAssociation;
    }

    /**
     * @param LabelAssociation[] $LabelAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfLabelAssociation
     */
    public function setLabelAssociation(array $LabelAssociation = null)
    {
        $this->LabelAssociation = $LabelAssociation;
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
      return isset($this->LabelAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LabelAssociation
     */
    public function offsetGet($offset)
    {
      return $this->LabelAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LabelAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LabelAssociation[] = $value;
      } else {
        $this->LabelAssociation[$offset] = $value;
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
      unset($this->LabelAssociation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return LabelAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->LabelAssociation);
    }

    /**
     * Countable implementation
     *
     * @return LabelAssociation Return count of elements
     */
    public function count()
    {
      return count($this->LabelAssociation);
    }

    /**
     * Change the current array with another
     *
     * @return LabelAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $LabelAssociation)
    {
        $prev = $this->LabelAssociation;
        $this->LabelAssociation = $LabelAssociation;
        return $prev;
    }

}
