<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL blob datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Blob/
 */
class Blob {

    /**
     * Creates a new bytes array.
     * @param string $bytes any bytes
     */
    public function __construct($bytes) {
    }

    /**
     * Returns bytes as a hex string.
     * @return string bytes as hexadecimal string
     */
    public function bytes() {
    }

    /**
     * Returns bytes as a hex string.
     * @return string bytes as hexadecimal string
     */
    function __toString() {
    }


}