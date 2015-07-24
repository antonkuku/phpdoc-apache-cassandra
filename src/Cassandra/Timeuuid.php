<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL timeuuid datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Timeuuid/
 */
class Timeuuid implements UuidInterface {

    /**
     * Creates a timeuuid from a given timestamp or current time.
     * @param int|null $timestamp Unix timestamp
     */
    public function __construct($timestamp = null) {
    }

    /**
     * Returns this timeuuid as string.
     * @return string timeuuid
     */
    public function __toString() {
    }

    /**
     * Returns this timeuuid as string.
     * @return string timeuuid
     */
    public function uuid() {
    }

    /**
     * Returns the version of this timeuuid.
     * @return int version of this timeuuid
     */
    public function version() {
    }

    /**
     * Unix timestamp.
     * @return int seconds
     */
    public function time() {
    }

    /**
     * Converts current timeuuid to PHP DateTime.
     * @return \DateTime PHP representation
     */
    public function toDateTime() {
    }

}