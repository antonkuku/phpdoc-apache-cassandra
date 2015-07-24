<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL set datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Set/
 */
class Set implements \Countable, \Iterator {

    /**
     * Creates a new collection of a given type.
     * @param string $type one of Cassandra::TYPE_*
     */
    public function __construct($type) {
    }

    /**
     * The type of this set.
     * @return string one of Cassandra::TYPE_*
     */
    public function type() {
    }

    /**
     * Array of values in this set.
     * @return array values
     */
    public function values() {
    }

    /**
     * Adds a value to this set.
     * @param mixed $value
     * @return bool whether the value has been added
     */
    public function add($value) {
    }

    /**
     * Returns whether a value is in this set.
     * @param mixed $value Value
     * @return whether the value is in the set
     */
    public function has($value) {
    }

    /**
     * Removes a value to this set.
     * @param mixed $value Value
     * @return bool whether the value has been removed
     */
    public function remove($value) {
    }

    /**
     * Total number of elements in this set
     * @return int count
     */
    public function count() {
    }

    /**
     * Current element for iteration
     * @return mixed current element
     */
    public function current() {
    }

    /**
     * Current key for iteration
     * @return int current key
     */
    public function key() {
    }

    /**
     * Move internal iterator forward
     */
    public function next() {
    }

    /**
     * Check whether a current value exists
     * @return bool
     */
    public function valid() {
    }

    /**
     * Rewind internal iterator
     */
    public function rewind() {
    }

}