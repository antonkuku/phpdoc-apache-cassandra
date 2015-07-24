<?php

namespace Cassandra;

/**
 * Cassandra\Rows represent a result of statement execution.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Rows/
 */
class Rows implements \Iterator, \Countable, \ArrayAccess {

    /**
     * Returns the number of rows.
     * @return int count
     */
    public function count() {
    }

    /**
     * Returns current row.
     * @return mixed current row
     */
    public function current() {
    }

    /**
     * Returns current index.
     * @return int index
     */
    public function key() {
    }

    /**
     * Advances the rows iterator by one.
     */
    public function next() {
    }

    /**
     * Returns existence of more rows being available.
     * @return bool whether there are more rows available for iteration
     */
    public function valid() {
    }

    /**
     * Resets the rows iterator.
     */
    public function rewind() {
    }

    /**
     * Returns existence of a given row.
     * @param int $offset row index
     * @return bool whether a row at a given index exists
     */
    public function offsetExists($offset) {
    }

    /**
     * Returns a row at given index.
     * @param int $offset row index
     * @return array|null row at a given index
     */
    public function offsetGet($offset) {
    }

    /**
     * Sets a row at given index.
     * @param int $offset
     * @param array $value
     * @throws \Cassandra\Exception\DomainException
     */
    public function offsetSet($offset, $value) {
    }

    /**
     * Removes a row at given index.
     * @param int $offset row index
     * @throws \Cassandra\Exception\DomainException
     */
    public function offsetUnset($offset) {
    }

    /**
     * Check for the last page when paging.
     * @return bool whether this is the last page or not
     */
    public function isLastPage() {
    }

    /**
     * Get the next page of results.
     * @param float|null $timeout
     * @return Rows|null loads and returns next result page
     */
    public function nextPage($timeout = null) {
    }

    /**
     * Get the next page of results asynchronously.
     * @return Future returns future of the next result page
     */
    public function nextPageAsync() {
    }

    /**
     * Get the first row.
     * @return array|null returns first row if any
     */
    public function first() {
    }

}