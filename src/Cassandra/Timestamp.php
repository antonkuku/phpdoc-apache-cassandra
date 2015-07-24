<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL timestamp datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Timestamp/
 */
class Timestamp {

    /**
     * Creates a new timestamp from either unix timestamp and microseconds or from the current time by default.
     * @param int|null $time Unix timestamp
     * @param int|null $usec Microseconds
     */
    public function __construct($time = null, $usec = null) {
    }

    /**
     * Unix timestamp.
     * @return int seconds
     */
    public function time() {
    }

    /**
     * Microtime from this timestamp
     * @param bool|false $get_as_float Whether to get this value as float
     * @return float|string Cassandra\Float or string representation
     */
    public function microtime($get_as_float = false) {
    }

    /**
     * Converts current timestamp to PHP DateTime.
     * @return \DateTime PHP representation
     */
    public function toDateTime() {
    }

    /**
     * Returns a string representation of this timestamp.
     * @return string timestamp
     */
    public function __toString() {
    }

}