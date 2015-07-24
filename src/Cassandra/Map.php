<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL map datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Map/
 */
class Map implements \Countable, \Iterator, \ArrayAccess {

    /**
     * Creates a new map of a given key and value type.
     * @param string $keyType one of Cassandra::TYPE_*
     * @param string $valueType one of Cassandra::TYPE_*
     */
    public function __construct($keyType, $valueType) {
    }

    /**
     * Returns key type of this map.
     * @return string key type, one of Cassandra::TYPE_*
     */
    public function keyType() {
    }

    /**
     * Returns all keys in the map as an array.
     * @return array keys
     */
    public function keys() {
    }

    /**
     * Returns value type of this map.
     * @return string value type, one of Cassandra::TYPE_*
     */
    public function valueType() {
    }

    /**
     * Returns all values in the map as an array.
     * @return array values
     */
    public function values() {
    }

    /**
     * Sets key/value in the map.
     * @param mixed $key key
     * @param mixed $value value
     */
    public function set($key, $value) {
    }

    /**
     * Gets the value of the key in the map.
     * @param mixed $key key
     * @return mixed Value or null
     */
    public function get($key) {
    }

    /**
     * Removes the key from the map.
     * @param mixed $key key
     * @return bool Whether the key was removed or not, e.g. didn’t exist
     */
    public function remove($key) {
    }

    /**
     * Returns whether the key is in the map.
     * @param mixed $key key
     * @return bool Whether the key is in the map or not
     */
    public function has($key) {
    }

    /**
     * Total number of elements in this map
     * @return int count
     */
    public function count() {
    }

    /**
     * Current value for iteration
     * @return mixed current value
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

    /**
     * Sets the value at a given key
     * @param mixed $key Key to use.
     * @param mixed $value Value to set.
     * @throws \Cassandra\Exception\InvalidArgumentException when the type of key or value is wrong
     */
    public function offsetSet($key, $value) {
    }

    /**
     * Retrieves the value at a given key
     * @param mixed $key Key to use.
     * @throws \Cassandra\Exception\InvalidArgumentException when the type of key is wrong
     * @return mixed|null Value or null
     */
    public function offsetGet($key) {
    }

    /**
     * Deletes the value at a given key
     * @param mixed $key Key to use.
     * @throws \Cassandra\Exception\InvalidArgumentException when the type of key is wrong
     */
    public function offsetUnset($key) {
    }

    /**
     * Returns whether the value a given key is present
     * @param mixed $key Key to use.
     * @throws \Cassandra\Exception\InvalidArgumentException when the type of key is wrong
     * @return bool Whether the value at a given key is present
     */
    public function offsetExists($key) {
    }

}