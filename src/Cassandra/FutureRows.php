<?php

namespace Cassandra;

/**
 * This future results is resolved with Cassandra::Rows.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/FutureRows/
 */
class FutureRows implements Future {

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