<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\WriteTimeoutException is raised when a coordinator failed to receive acks from the required number of replica nodes in time during a write.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/WriteTimeoutException/
 */
class WriteTimeoutException extends ExecutionException {

}