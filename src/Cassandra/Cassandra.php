<?php

/**
 * Class Cassandra
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/
 */
class Cassandra {

    /**
     * Consistency level ANY means the request is fulfilled as soon as the data has been written on the Coordinator. Requests with this consistency level are not guranteed to make it to Replica nodes.
     */
    CONST CONSISTENCY_ANY = 0;

    /**
     * Consistency level ONE gurantess that data has been written to at least one Replica node.
     */
    CONST CONSISTENCY_ONE = 1;

    /**
     * Same as CONSISTENCY_ONE, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    CONST CONSISTENCY_LOCAL_ONE = 10;

    /**
     * Consistency level TWO gurantess that data has been written to at least two Replica nodes.
     */
    CONST CONSISTENCY_TWO = 2;

    /**
     * Consistency level THREE gurantess that data has been written to at least three Replica nodes.
     */
    CONST CONSISTENCY_THREE = 3;

    /**
     * Consistency level QUORUM gurantess that data has been written to at least the majority of Replica nodes. How many nodes exactly are a majority depends on the replication factor of a given keyspace and is calculated using the formula ceil(RF / 2 + 1), where ceil is a mathematical ceiling function and RF is the replication factor used. For example, for a replication factor of 5, the majority is ceil(5 / 2 + 1) = 3.
     */
    CONST CONSISTENCY_QUORUM = 4;

    /**
     * Same as CONSISTENCY_QUORUM, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    CONST CONSISTENCY_LOCAL_QUORUM = 6;

    /**
     * Consistency level EACH_QUORUM gurantess that data has been written to at least a majority Replica nodes in all datacenters. This consistency level works only with NetworkTopologyStrategy replication.
     */
    CONST CONSISTENCY_EACH_QUORUM = 7;

    /**
     * Consistency level ALL gurantess that data has been written to all Replica nodes.
     */
    CONST CONSISTENCY_ALL = 5;

    /**
     * This is a serial consistency level, it is used in conditional updates, e.g. (CREATE|INSERT ... IF NOT EXISTS), and should be specified as the serial_consistency option of the Cassandra\ExecutionOptions instance.
     * Consistency level SERIAL, when set, ensures that a Paxos commit fails if any of the replicas is down.
     */
    CONST CONSISTENCY_SERIAL = 8;

    /**
     * Same as CONSISTENCY_SERIAL, but confined to the local data center. This consistency level works only with NetworkTopologyStrategy replication.
     */
    CONST CONSISTENCY_LOCAL_SERIAL = 9;

    /**
     * Perform no verification of Cassandra nodes when using SSL encryption.
     */
    CONST VERIFY_NONE = 0;

    /**
     * Verify presence and validity of SSL certificates of Cassandra.
     */
    CONST VERIFY_PEER_CERT = 1;

    /**
     * Verify that the IP address matches the SSL certificate’s common name or one of its subject alternative names. This implies the certificate is also present.
     */
    CONST VERIFY_PEER_IDENTITY = 2;

    /**
     *
     */
    CONST BATCH_LOGGED = 0;

    /**
     *
     */
    CONST BATCH_UNLOGGED = 1;

    /**
     *
     */
    CONST BATCH_COUNTER = 2;

    /**
     * When using a map, collection or set of type text, all of its elements must be strings.
     */
    CONST TYPE_TEXT = 'text';

    /**
     * When using a map, collection or set of type ascii, all of its elements must be strings.
     */
    CONST TYPE_ASCII = 'ascii';

    /**
     * When using a map, collection or set of type varchar, all of its elements must be strings.
     */
    CONST TYPE_VARCHAR = 'varchar';

    /**
     * When using a map, collection or set of type bigint, all of its elements must be instances of Cassandra\Bigint.
     */
    CONST TYPE_BIGINT = 'bigint';

    /**
     * When using a map, collection or set of type blob, all of its elements must be instances of Cassandra\Blob.
     */
    CONST TYPE_BLOB = 'blob';

    /**
     * When using a map, collection or set of type boolean, all of its elements must be booleans.
     */
    CONST TYPE_BOOLEAN = 'boolean';

    /**
     * When using a map, collection or set of type counter, all of its elements must be instances of Cassandra\Bigint.
     */
    CONST TYPE_COUNTER = 'counter';

    /**
     * When using a map, collection or set of type decimal, all of its elements must be instances of Cassandra\Decimal.
     */
    CONST TYPE_DECIMAL = 'decimal';

    /**
     * When using a map, collection or set of type double, all of its elements must be doubles.
     */
    CONST TYPE_DOUBLE = 'double';

    /**
     * When using a map, collection or set of type float, all of its elements must be instances of Cassandra\Float.
     */
    CONST TYPE_FLOAT = 'float';

    /**
     * When using a map, collection or set of type int, all of its elements must be ints.
     */
    CONST TYPE_INT = 'int';

    /**
     * When using a map, collection or set of type timestamp, all of its elements must be instances of Cassandra\Timestamp.
     */
    CONST TYPE_TIMESTAMP = 'timestamp';

    /**
     * When using a map, collection or set of type uuid, all of its elements must be instances of Cassandra\Uuid.
     */
    CONST TYPE_UUID = 'uuid';

    /**
     * When using a map, collection or set of type varint, all of its elements must be instances of Cassandra\Varint.
     */
    CONST TYPE_VARINT = 'varint';

    /**
     * When using a map, collection or set of type timeuuid, all of its elements must be instances of Cassandra\Timeuuid.
     */
    CONST TYPE_TIMEUUID = 'timeuuid';

    /**
     * When using a map, collection or set of type inet, all of its elements must be instances of Cassandra\Inet.
     */
    CONST TYPE_INET = 'inet';

    /**
     * Current version of the extension.
     */
    CONST VERSION = '1.0.0-beta';

    /**
     * Returns a Cassandra\Cluster Builder.
     * @return \Cassandra\Cluster\Builder a Cassandra\Cluster Builder instance
     */
    public static function cluster() {
    }

    /**
     * Returns SSL Options Builder.
     * @return \Cassandra\SSLOptions\Builder an Cassandra\SSLOptions Builder instance
     */
    public static function ssl() {
    }

}