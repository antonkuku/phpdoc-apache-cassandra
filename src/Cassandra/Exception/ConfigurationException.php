<?php

namespace Cassandra\Exception;

/**
 * Cassandra\Exception\ConfigurationException is raised when query is syntactically correct but invalid because of some configuration issue. For example when attempting to drop a non-existent keyspace.
 * @package Cassandra\Exception
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Exception/ConfigurationException/
 */
class ConfigurationException extends ValidationException {

}