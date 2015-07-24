<?php

namespace Cassandra;

/**
 * A PHP representation of the CQL float datatype
 * @package Cassandra
 * @link http://datastax.github.io/php-driver/api/class/Cassandra/Float/
 */
class Float implements Numeric {

    /**
     * Creates a new float.
     * @param string $value float value as a string
     */
    public function __construct($value) {
    }

    /**
     * Minimum possible Cassandra\Float value
     * @return Float minimum value
     */
    public static function min() {
    }

    /**
     * Maximim possible Cassandra\Float value
     * @return Float maximum value
     */
    public static function max() {
    }

    /**
     * Returns the float value.
     * @return string float value
     */
    public function value() {
    }

    /**
     * Returns string representation of the float value.
     * @return string float value
     */
    function __toString() {
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