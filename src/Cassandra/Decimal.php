<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL decimal datatype
 * The actual value of a decimal is $value * pow(10, $scale * -1)
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Decimal/
 */
class Decimal implements Numeric {

    /**
     * Creates a decimal from a given decimal string
     * @param string $value Any decimal string
     */
    public function __construct($value) {
    }

    /**
     * String representation of this decimal.
     * @return string Decimal value
     */
    function __toString() {
    }

    /**
     * Scale of this decimal as int.
     * @return int Scale
     */
    public function scale() {
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

}