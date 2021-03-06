<?php

namespace Cassandra;

/**
 * A future that always resolves in a value.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/FutureValue/
 */
class FutureValue implements Future {
    
    /**
     * Waits for a given future resource to resolve and throws errors if any.
     * @param float|null $timeout
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @throws \Cassandra\Exception\TimeoutException
     * @return mixed a value that the future has been resolved with
     */
    public function get($timeout = null) {
    }

}