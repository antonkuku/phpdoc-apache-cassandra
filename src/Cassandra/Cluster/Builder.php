<?php

namespace Cassandra\Cluster;

/**
 * Cassandra\Cluster builder allows fluent configuration of the cluster instance.
 * @package Cassandra\Cluster
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Cluster/Builder/
 */
class Builder {

    /**
     * Returns a Cassandra\Cluster Instance.
     * @return \Cassandra\Cluster Cassandra\Cluster instance
     */
    public function build() {
    }

    /**
     * Configures default consistency for all requests.
     * @param int $consistency A consistency level, must be one of Cassandra::CONSISTENCY_* values
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultConsistency($consistency) {
    }

    /**
     * Configures default page size for all results. Cassandra\Set to null to disable paging altogether.
     * @param int $pageSize default page size
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultPageSize($pageSize) {
    }

    /**
     * Configures default timeout for future resolution in blocking operations Cassandra\Set to null to disable (default).
     * @param float $timeout timeout value
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDefaultTimeout($timeout) {
    }

    /**
     * Configures the initial endpoints. Note that the driver will automatically discover and connect to the rest of the cluster.
     * @param string $host one or more ip addresses or hostnames
     * @return \Cassandra\Cluster\Builder self
     */
    public function withContactPoints($host) {
    }

    /**
     * Specify a different port to be used when connecting to the cluster.
     * @param int $port a number between 1 and 65535
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return \Cassandra\Cluster\Builder self
     */
    public function withPort($port) {
    }

    /**
     * Configures this cluster to use a round robin load balancing policy.
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRoundRobinLoadBalancingPolicy() {
    }

    /**
     * Configures this cluster to use a datacenter aware round robin load balancing policy.
     * @param string $localDatacenter Name of the local datacenter
     * @param int $hostPerRemoteDatacenter Maximum number of hosts to try in remote datacenters
     * @param bool $useRemoteDatacenterForLocalConsistencies Allow using hosts from remote datacenters to execute statements with local consistencies
     * @return \Cassandra\Cluster\Builder self
     */
    public function withDatacenterAwareRoundRobinLoadBalancingPolicy($localDatacenter, $hostPerRemoteDatacenter, $useRemoteDatacenterForLocalConsistencies) {
    }

    /**
     * Enable token aware routing.
     * @param bool|true $enabled Whether to enable token aware routing (optional)
     * @return \Cassandra\Cluster\Builder self
     */
    public function withTokenAwareRouting($enabled = true) {
    }

    /**
     * Configures cassandra authentication.
     * @param string $username Username
     * @param string $password Password
     * @return \Cassandra\Cluster\Builder self
     */
    public function withCredentials($username, $password) {
    }

    /**
     * Timeout used for establishing TCP connections.
     * @param float $timeout Timeout value in seconds, can be fractional
     * @return \Cassandra\Cluster\Builder self
     */
    public function withConnectTimeout($timeout) {
    }

    /**
     * Timeout used for waiting for a response from a node.
     * @param float $timeout Timeout value in seconds, can be fractional
     * @return \Cassandra\Cluster\Builder self
     */
    public function withRequestTimeout($timeout) {
    }

    /**
     * \Cassandra\Set up ssl context.
     * @param \Cassandra\SSLOptions $options a preconfigured ssl context
     * @return \Cassandra\Cluster\Builder self
     */
    public function withSSL(\Cassandra\SSLOptions $options) {
    }

    /**
     * Enable persistent sessions and clusters.
     * @param bool|true $enabled whether to enable persistent sessions and clusters (optional)
     * @return \Cassandra\Cluster\Builder self
     */
    public function withPersistentSessions($enabled = true) {
    }

}