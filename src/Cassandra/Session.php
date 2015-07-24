<?php

namespace Cassandra;

/**
 * A session is used to prepare and execute statements.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/interface/Cassandra/Session/
 */
interface Session {

    /**
     * Executes a given statement and returns a result.
     * @param CassandraStatement $statement statement to be executed
     * @param ExecutionOptions $options execution options (optional)
     * @throws Exception
     * @return Rows execution result
     */
    public function execute(Statement $statement, ExecutionOptions $options);

    /**
     * Executes a given statement and returns a future result.
     * Note that this method ignores timeout specified in the Cassandra\ExecutionOptions, you can provide one to Cassandra\Future::get() instead.
     * @param Statement $statement statement to be executed
     * @param ExecutionOptions|null $options execution options (optional)
     * @return Future future result
     */
    public function executeAsync(Statement $statement, ExecutionOptions $options = null);

    /**
     * Creates a prepared statement from a given CQL string.
     * Note that this method only uses the ExecutionOptions::$timeout option, all other options will be ignored.
     * @param string $cql CQL statement string
     * @param ExecutionOptions|null $options execution options (optional)
     * @throws Exception
     * @return PreparedStatement prepared statement
     */
    public function prepare($cql, ExecutionOptions $options = null);

    /**
     * Asynchronously prepares a statement and returns a future prepared statement.
     * Note that all options passed to this method will be ignored.
     * @param string $cql CQL string to be prepared
     * @param ExecutionOptions|null $options preparation options
     * @return Future statement
     */
    public function prepareAsync($cql, ExecutionOptions $options = null);

    /**
     * Closes current session and all of its connections.
     * @param float $timeout Timeout to wait for closure in seconds
     * @return void
     */
    public function close($timeout = null);

    /**
     * Asynchronously closes current session once all pending requests have finished.
     * @return Future future
     */
    public function closeAsync();

}