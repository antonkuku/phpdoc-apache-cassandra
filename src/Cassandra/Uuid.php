<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL uuid datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Uuid/
 */
class Uuid implements UuidInterface {


    /**
     * Creates a uuid from a given uuid string or a random one.
     * @param string|null $uuid A uuid string
     */
    public function __construct($uuid = null) {
    }

    /**
     * Returns this uuid as string.
     * @return string uuid
     */
    public function __toString() {
    }

    /**
     * Returns this uuid as string.
     * @return string uuid
     */
    public function uuid() {
    }

    /**
     * Returns the version of this uuid.
     * @return int version of this uuid
     */
    public function version() {
    }


}