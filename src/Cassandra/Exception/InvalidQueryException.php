<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\InvalidQueryException is raised when query is syntactically correct but invalid. For example when attempting to create a table without specifying a keyspace.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/InvalidQueryException/
 */
class InvalidQueryException extends ValidationException {

}