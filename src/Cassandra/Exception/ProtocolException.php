<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\ProtocolException is raised when a client did not follow Apache Cassandra protocol, e.g. sending a QUERY message before STARTUP. Seeing this error can be considered a bug.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/ProtocolException/
 */
class ProtocolException extends RuntimeException {

}