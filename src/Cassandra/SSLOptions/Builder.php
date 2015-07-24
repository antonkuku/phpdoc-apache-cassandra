<?php

namespace Cassandra\SSLOptions;

/**
 * Cassandra\SSLOptions builder allows fluent configuration of ssl options.
 * @package Cassandra\SSLOptions
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/SSLOptions/Builder/
 */
class Builder {

    /**
     * Adds a trusted certificate. This is used to verify node’s identity.
     * @param string $path one or more paths to files containing a PEM formatted certificate.
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return Builder self
     */
    public function withTrustedCerts($path) {
    }

    /**
     * Disable certificate verification.
     * @param int $flags
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return Builder self
     */
    public function withVerifyFlags($flags) {
    }

    /**
     * Cassandra\Set client-side certificate chain.
     * This is used to authenticate the client on the server-side. This should contain the entire Certificate chain starting with the certificate itself.
     * @param string $path path to a file containing a PEM formatted certificate.
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return Builder self
     */
    public function withClientCert($path) {
    }

    /**
     * Cassandra\Set client-side private key. This is used to authenticate the client on the server-side.
     * @param string $path Path to the private key file
     * @param string|null $passphrase Passphrase for the private key, if any
     * @throws \Cassandra\Exception\InvalidArgumentException
     * @return Builder self
     */
    public function withPrivateKey($path, $passphrase = null) {
    }

    /**
     * Builds SSL options.
     * @return \Cassandra\SSLOptions ssl options configured accordingly.
     */
    public function build() {
    }

}