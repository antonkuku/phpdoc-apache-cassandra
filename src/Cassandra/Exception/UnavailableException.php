<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\UnavailableException is raised when a coordinator detected that there aren’t enough replica nodes available to fulfill the request.
 * NOTE: Request has not even been forwarded to the replica nodes in this case.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/UnavailableException/
 */
class UnavailableException extends ExecutionException {

}