<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL varint datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Varint/
 */
class Varint implements Numeric {

    /**
     * Creates a new variable length integer.
     * @param string $value integer value as a string
     */
    public function __construct($value) {
    }

    /**
     * Returns the integer value.
     * @return string integer value
     */
    public function value() {
    }

    /**
     * @param Numeric $addend a number to add to this one
     * @return Numeric sum
     */
    public function add(Numeric $addend) {
    }

    /**
     * @param Numeric $subtrahend a number to subtract from this one
     * @return Numeric difference
     */
    public function sub(Numeric $subtrahend) {
    }

    /**
     * @param Numeric $multiplier a number to multiply this one by
     * @return Numeric product
     */
    public function mul(Numeric $multiplier) {
    }

    /**
     * @param Numeric $divisor a number to divide this one by
     * @return Numeric quotient
     */
    public function div(Numeric $divisor) {
    }

    /**
     * @param Numeric $divisor a number to divide this one by
     * @return Numeric remainder
     */
    public function mod(Numeric $divisor) {
    }

    /**
     * @return Numeric absolute value
     */
    public function abs() {
    }

    /**
     * @return Numeric negative value
     */
    public function neg() {
    }

    /**
     * @return Numeric square root
     */
    public function sqrt() {
    }

    /**
     * @return int this number as int
     */
    public function toInt() {
    }

    /**
     * @return float this number as float
     */
    public function toDouble() {
    }

    /**
     * Returns the integer value.
     * @return string integer value
     */
    function __toString() {
    }


}