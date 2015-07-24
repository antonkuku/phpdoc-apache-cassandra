<?php

namespace Cassandra;

/**
 * Default cluster implementation.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/DefaultCluster/
 */
class DefaultCluster implements Cluster {

    /**
     * Creates a new Cassandra\Session instance.
     * @param string|null $keyspace Optional keyspace name
     * @return \Cassandra\Session Cassandra\Session instance
     */
    public function connect($keyspace = null) {
    }

    /**
     * Creates a new Cassandra\Session instance.
     * @param string|null $keyspace Optional keyspace name
     * @return \Cassandra\Future A Cassandra\Future Cassandra\Session instance
     */
    public function connectAsync($keyspace = null) {
    }


}