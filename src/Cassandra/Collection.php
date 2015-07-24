<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL list datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Collection/
 */
class Collection implements \Countable, \Iterator {

    /**
     * Creates a new collection of a given type.
     * @param string $type one of Cassandra::TYPE_*
     */
    public function __construct($type) {
    }

    /**
     * The type of this collection.
     * @return string one of Cassandra::TYPE_*
     */
    public function type() {
    }

    /**
     * Array of values in this collection.
     * @return array values
     */
    public function values() {
    }

    /**
     * Adds one or more values to this collection.
     * @param mixed $value one or more values to add
     * @return int total number of values in this collection
     */
    public function add($value) {
    }

    /**
     * Deletes the value at a given index
     * @param int $index Index
     * @return bool Whether the value at a given index is correctly removed
     */
    public function remove($index) {
    }

    /**
     * Retrieves the value at a given index.
     * @param int $index Index
     * @return mixed|null value
     */
    public function get($index) {
    }

    /**
     * Finds index of a value in this collection.
     * @param mixed $value Value
     * @return int|null Index
     */
    public function find($value) {
    }

    /**
     * Current element for iteration
     * @return mixed current element
     */
    public function current() {
    }

    /**
     * Move internal iterator forward
     */
    public function next() {
    }

    /**
     * Current key for iteration
     * @return int current key
     */
    public function key() {
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

    /**
     * Total number of elements in this collection
     * @return int count
     */
    public function count() {
    }

}