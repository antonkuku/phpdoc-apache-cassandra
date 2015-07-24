<?php

namespace Cassandra;

/**
 * Prepared statements are faster to execute because the server doesn’t need to process a statement’s CQL during the execution.
 * With token-awareness enabled in the driver, prepared statements are even faster, because they are sent directly to replica nodes and avoid the extra network hop.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/PreparedStatement/
 */
class PreparedStatement implements Statement {

}