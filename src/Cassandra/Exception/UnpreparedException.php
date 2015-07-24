<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\UnpreparedException is raised when a given prepared statement id does not exist on the server. The driver should be automatically re-preparing the statement in this case. Seeing this error could be considered a bug.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/UnpreparedException/
 */
class UnpreparedException extends ValidationException {

}