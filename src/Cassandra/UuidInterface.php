<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL timeuuid datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/interface/Cassandra/UuidInterface/
 */
interface UuidInterface {

    /**
     * Returns this uuid as string.
     * @return string uuid as string
     */
    public function uuid();

    /**
     * Returns the version of this uuid.
     * @return int version of this uuid
     */
    public function version();

}