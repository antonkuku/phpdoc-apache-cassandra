<?php

namespace Cassandra;

/**
 * Request execution options.
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/ExecutionOptions/
 */
class ExecutionOptions {

    /**
     * Creates a new options object for execution.
     * array[‘arguments’] array An array or positional or named arguments
     * array[‘consistency’] int One of Cassandra::CONSISTENCY_*
     * array[‘timeout’] int|null A number of seconds or null
     * array[‘page_size’] int A number of rows to include in result for paging
     * array[‘serial_consistency’] int Either Cassandra::CONSISTENCY_SERIAL or Cassandra::CONSISTENCY_LOCAL_SERIAL
     *
     * @param array|null $options various execution options
     * @throws \Cassandra\Exception\InvalidArgumentException
     */
    public function __construct($options = null) {
    }

}