<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL inet datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Inet/
 */
class Inet {

    /**
     * Creates a new IPv4 or IPv6 inet address.
     * @param string $address any IPv4 or IPv6 address
     */
    function __construct($address) {
    }

    /**
     * Returns the normalized string representation of the address.
     * @return string address
     */
    public function address() {
    }

    /**
     * Returns the normalized string representation of the address.
     * @return string address
     */
    function __toString() {
    }

}