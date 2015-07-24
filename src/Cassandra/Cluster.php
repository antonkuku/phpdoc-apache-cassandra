<?php

namespace Cassandra;

/**
 * Cassandra\Cluster object is used to create Sessions.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/interface/Cassandra/Cluster/
 */
interface Cluster {

    /**
     * Creates a new Cassandra\Session instance.
     * @param string|null $keyspace Optional keyspace name
     * @return \Cassandra\Session Cassandra\Session instance
     */
    public function connect($keyspace = null);

    /**
     * Creates a new Cassandra\Session instance.
     * @param string|null $keyspace Optional keyspace name
     * @return \Cassandra\Future A Cassandra\Future Cassandra\Session instance
     */
    public function connectAsync($keyspace = null);

}