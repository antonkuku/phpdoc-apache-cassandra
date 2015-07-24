<?php

namespace Cassandra;

/**
 * Batch statements are used to execute a series of simple or prepared statements.
 * There are 3 types of batch statements:
 *
 * Cassandra::BATCH_LOGGED - this is the default batch type. This batch guarantees that either all or none of its statements will be executed. This behavior is achieved by writing a batch log on the coordinator, which slows down the execution somewhat.
 * Cassandra::BATCH_UNLOGGED - this batch will not be verified when executed, which makes it faster than a LOGGED batch, but means that some of its statements might fail, while others - succeed.
 * Cassandra::BATCH_COUNTER - this batch is used for counter updates, which are, unlike other writes, not idempotent.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/BatchStatement/
 */
class BatchStatement implements Statement {

    /**
     * Creates a new batch statement.
     * @param int $type must be one of Cassandra::BATCH_*
     */
    public function __construct($type = Cassandra::BATCH_LOGGED) {
    }

    /**
     * Adds a statement to this batch.
     * @param Statement $statement the statement to add
     * @param array|null $arguments positional or named arguments
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return BatchStatement self
     */
    public function add(Statement $statement, array $arguments = null) {
    }

}