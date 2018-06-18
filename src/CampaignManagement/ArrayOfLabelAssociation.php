<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfLabelAssociation implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfLabelAssociation
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
     * Iterator implementation
     *
     * @return LabelAssociation Return the current element
     */
    public function current()
    {
      return current($this->LabelAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LabelAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LabelAssociation);
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
      reset($this->LabelAssociation);
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

}
