<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\ReadTimeoutException is raised when a coordinator failed to receive acks from the required number of replica nodes in time during a read.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/ReadTimeoutException/
 */
class ReadTimeoutException extends ExecutionException {

}