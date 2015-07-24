<?php

namespace Cassandra;

/**
 * Simple statements can be executed using a Cassandra\Session instance. They are constructed with a CQL string that can contain positional argument markers ?.
 * NOTE: Positional argument are only valid for native protocol v2+.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/SimpleStatement/
 */
class SimpleStatement implements Statement {

    /**
     * Creates a new simple statement with the provided CQL.
     * @param string $cql CQL string for this simple statement
     */
    public function __construct($cql) {
    }

}